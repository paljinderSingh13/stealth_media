<?php

namespace App\Http\Controllers\Organization\Master;

use Illuminate\Http\Request;
use App\Model\Organization\Master\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function role_data(){
       $data = Role::where('status',1)->pluck('name', 'id');
       return response()->json($data);
     }

    public function index()
    {

      // $roles = Role::orderBy('created_at', 'desc')->get();
      // $count = Role::count();
      return view('organization.masters.role');

    }

    public function data(){

       $data = Role::all();
       return response()->json($data);

   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $request->validate(['name'=>'required']);
      $this->validate($request, [
        'name' => 'required|alpha',
        'detail'=> 'required|alpha'
      ]);
      if(!empty($request['id'])){
        $roles = Role::find($request->id);
      }else{
        // $request->validate(['name'=>'required']);
        $request->validate(['name'=>'unique:roles']); 

        $roles = new Role;
      }


    $roles->name = $request->input('name');
    $roles->detail = $request->input('detail');
    // $role->created_by = $request->created_by;
    $roles->save();

    return response()->json(['success'=>"Role saved Successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $role = Role::where(['id'=>$id]);
      $role->delete();

      return response()->json(['success'=>"Role Deleted Successfully"]);
    }

    public function status($id, $status){

      if($status==1){
          $status = 0;
      }else{
          $status =1;
      }
      Role::where('id',$id)->update(['status'=>$status]);

      return response()->json(['success'=>"Status Changed Successfully"]);
  }



}
