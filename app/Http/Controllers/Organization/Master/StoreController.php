<?php

namespace App\Http\Controllers\Organization\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Model\Organization\Master\Store;
use Auth;

use App\Project;
use App\ProjectChat;
use App\Doctor;


class StoreController extends Controller
{



    public function query(){

        $dr = Doctor::with('slot.schedule')->find(1);

        return view('organization.masters.store',compact('dr'));

        // foreach($dr->slot as $key =>$val){
        //     dump($val->schedule);
        // }
        dd($dr->toArray());

        $data = Project::all();

        $ary = collect([1,23,3]);
        dump($ary);

        dd($data->keyBy('name')->toArray());

    }

    public function new_project_chat(Request $request){
        $model = new ProjectChat();
        $model->project_id = $request->project_id;
        $model->user_id = Auth::id();
        $model->comment = $request->comment;

        $model->save();

    }

    public function project_chat_data($pid){

        $chat = ProjectChat::where('project_id',$pid)->with('staff:id,first_name,last_name')->get();
        return response()->json($chat);
    }

    public function store_data(){
      $data = Store::where('status',1)->pluck('name', 'id');
      return response()->json($data);
    }

    public function index(){


        return view('organization.masters.store');
    }

    public function project_detail($pid=null){

        // dd(123);
        return view('project_detail',compact('pid'));


    }

    public function project_detail_data($pid){


        $data = Project::with('sale')->whereId($pid)->first();

        return response()->json($data);
    }

    public function save(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'name'=>'required',
          //   'contact_number'=>'required|digits_between:8,10',
          //   'alertnate_contact_number'=>'digits_between:8,10',
          //   'email'=>'required|email',
          //   'country'=> 'required|alpha',
          //   'street_name'=> 'required',
          //   'street_number'=>'required|numeric|min:1',
          //   'business_number'=> 'required|numeric|min:1',
          //   'bank_account_number'=> 'required|numeric|min:6',
          //   'state'=> 'required|alpha',
          //   'country'=> 'required|alpha',
          //   'bsb'=> 'required',
          //   'bank_account_name'=> 'required|alpha',
          //   'business_name'=> 'required|alpha',
            ]);
        // dd($request->all());
        $dir = 'project/'.str_replace(' ','_',$request->name);

        if($request->hasFile('webscope_file')){

            $webscope_file = $request->file('webscope_file');
            $webscope = 'webscope'.'.'.$webscope_file->getClientOriginalExtension();
            $webscope_file->move($dir,$webscope);
        }

        if($request->hasFile('service_agreement_file')){

            $service_agreement_file = $request->file('service_agreement_file');
            $service_agreement = 'service_agreement'.'.'.$service_agreement_file->getClientOriginalExtension();
            $service_agreement_file->move($dir, $service_agreement);
        }

        if($request->hasFile('seo_scope_file')){

            $seo_scope_file = $request->file('seo_scope_file');
            $seo_scope = 'seo_scope'.'.'.$seo_scope_file->getClientOriginalExtension();
            $seo_scope_file->move($dir, $seo_scope);
        }
        if($request->hasFile('website_training_file')){

            $website_training_file = $request->file('website_training_file');
            $website_training = 'website_training'.'.'.$website_training_file->getClientOriginalExtension();
            $website_training_file->move($dir, $website_training);
        }
        if($request->hasFile('email_setup_file')){

            $email_setup_file = $request->file('email_setup_file');
            $email_setup = 'email_setup'.'.'.$email_setup_file->getClientOriginalExtension();
            $email_setup_file->move($dir, $email_setup);
        }






        if(!empty($request['id'])){
            $model =  Project::find($request->id);
        }else{
        //   $request->validate(['name'=>'unique:stores','email'=>'unique:stores','contact_number'=>'unique:stores']);

            $model = new Project();
            $model->dir_path = $dir;
        }
        $model->fill($request->all());
        if($request->hasFile('webscope_file')){
            $model->webscope_file = $webscope;
            }
        if($request->hasFile('service_agreement_file')){
            $model->service_agreement_file = $service_agreement;
        }
        if($request->hasFile('seo_scope_file')){
            $model->seo_scope_file = $seo_scope;
        }

        if($request->hasFile('website_training_file')){
            $model->website_training_file = $website_training;
        }

        if($request->hasFile('email_setup_file')){
            $model->email_setup_file = $email_setup;
        }


        $model->start_date = date('Y-m-d',strtotime($request->start_date));
    	// $model->created_by = Auth::id();//($request->all());
    	$model->save();

    	return response()->json(['success'=>"The Project  saved successfully"]);
    }

    public function delete($id){

        Project::where(['id'=>$id])->delete();

        return response()->json(['success'=>"Project deleted successfully"]);

    }


    public function data(){

        $data = Project::all();
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
