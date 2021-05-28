<?php

namespace App\Http\Controllers\Organization\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Model\Master\Staff;|
 use App\User as Staff;
 use Hash;


class StaffController extends Controller
{
    



    public function index(){
      return view('organization.masters.staff.create');
    }

    public function data(){
      $staff = Staff::with('role','store')->get();
      return response()->json($staff);
    }

    public function store_id(){
      $data = Staff::where('status',1)->pluck('store_affiliation');
      return response()->json($data);
    }

    public function role_type(){
      $data = Staff::where('status',1)->pluck('user_type');
      return response()->json($data);
    }
    public function store(Request $request){
      // dd($request->all());

      $this->validate($request, [
        'user_name' => 'required',
        'gender'=> 'required',
        'user_type'=> 'required',
        'email'=> 'required',
        'contact'=> 'required',
        'store_affiliation'=> 'required',
        ]);
      if(!empty($request['id'])){
        $staff = Staff::find($request->id);
      }else{
        $request->validate(['user_name'=>'unique:users','email'=>'unique:users']);

        $staff = new Staff;
        $staff->password = Hash::make($request->password);
      }
    $staff->fill($request->all());

    $staff->save();

    return response()->json(['success'=>"Staff saved Successfully", $staff]);
    }

    public function destroy($id)
    {
      $staff = Staff::where(['id'=>$id]);
      $staff->delete();

      return response()->json(['success'=>"Staff Deleted Successfully"]);
    }

    public function status($id, $status){

      if($status==1){
          $status = 0;
      }else{
          $status =1;
      }
      Staff::where('id',$id)->update(['status'=>$status]);

      return response()->json(['success'=>"Status Changed Successfully"]);
  }

    public function primaryStore($id, $store_affiliation){
      // dd($store_affiliation);
        if($store_affiliation == "name113"){
            $store_affiliation = "my storeee";
        }
        else if($store_affiliation == "Brunswick"){
          $store_affiliation = "Genesis Virtual Store";
        }
        else if($store_affiliation == "Genesis Virtual Store"){
          $store_affiliation = "Malvern Phone";
        }
        $staff = Staff::where('id', $id)->update(['store_affiliation'=>$store_affiliation]);

        return response()->json($store_affiliation);

    }


}
