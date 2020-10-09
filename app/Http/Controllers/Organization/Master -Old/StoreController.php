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

        $request->validate(['name'=>'required']);
        $request->validate(['contact_number'=>'required']);
        $request->validate(['email'=>'required']);
        $request->validate(['country'=>'required']);
        $request->validate(['street_name'=>'required']);
        $request->validate(['bank_account_number'=>'required']);
        $request->validate(['state'=>'required']);
        $request->validate(['bsb'=>'required']);
        $request->validate(['bank_account_name'=>'required']);
        $request->validate(['business_name'=>'required']);

        if(!empty($request['id'])){
            $model =  Store::find($request->id);
        }else{
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
