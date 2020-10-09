<?php

namespace App\Http\Controllers\Organization\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Organization\Master\Store;
use Auth;

class StoreController extends Controller
{


    public function store_data(){
      $data = Store::where('status',1)->pluck('name', 'id');
      return response()->json($data);
    }

    public function index(){


        return view('organization.masters.store');
    }

    public function save(Request $request){

         $this->validate($request, [
          'name'=>'required|alpha',
          'contact_number'=>'required|digits_between:8,10',
          'alertnate_contact_number'=>'digits_between:8,10',
          'email'=>'required|email',
          'country'=> 'required|alpha',
          'street_name'=> 'required',
          'street_number'=>'required|numeric|min:1',
          'business_number'=> 'required|numeric|min:1',
          'bank_account_number'=> 'required|numeric|min:6',
          'state'=> 'required|alpha',
          'country'=> 'required|alpha',
          'bsb'=> 'required',
          'bank_account_name'=> 'required|alpha',
          'business_name'=> 'required|alpha',
          ]);
        if(!empty($request['id'])){
            $model =  Store::find($request->id);
        }else{
          $request->validate(['name'=>'unique:stores','email'=>'unique:stores','contact_number'=>'unique:stores']);

            $model = new Store();
        }
        $model->fill($request->all());
    	$model->created_by = Auth::id();//($request->all());
    	$model->save();

    	return response()->json(['success'=>"Store saved successfully"]);
    }

    public function delete($id){

        Store::where(['id'=>$id])->delete();

        return response()->json(['success'=>"Store deleted successfully"]);

    }


    public function data(){

        $data = Store::all();
        return response()->json($data);

    }

    public function status($id, $status){

        if($status==1){
            $status = 0;
        }else{
            $status =1;
        }
        Store::where('id',$id)->update(['status'=>$status]);

        return response()->json(['success'=>"Successfully Change Status"]);
    }

}
