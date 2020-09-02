<?php

namespace App\Http\Controllers\Organization\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Organization\Master\Store;
use Auth;

class StoreController extends Controller
{
    
    public function index(){
       
        
        return view('organization.masters.store');
    }

    public function save(Request $request){

        $request->validate(['name'=>'required']);
        if(!empty($request['id'])){
            $model =  Store::find($request->id);
        }else{
            $model = new Store();
            
        }
        $model->fill($request->all());
    	$model->created_by = Auth::guard('admin')->id();//($request->all());
    	$model->save();

    	return response()->json(['success'=>"Successfully save store"]);
    }

    public function delete($id){

        Store::where(['id'=>$id])->delete();

        return response()->json(['success'=>"Successfully save store"]);

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
