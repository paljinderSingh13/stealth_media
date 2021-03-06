<?php

namespace App\Http\Controllers\Organization\Master;

use Illuminate\Http\Request;
use App\Model\Organization\Master\StaffAvailable;
use App\User as Staff;
use App\Http\Controllers\Controller;
use Auth;

class RosterManagementController extends Controller
{

  public function get_store_staff(Request $request){

    $filter['month'] = date("m", strtotime("+1 month"));
    $filter['year'] = date("Y", strtotime("+1 month"));
    if($request->month_year){
      $date_data = explode('-', $request->month_year);
      $filter['month'] = $date_data[0];
      $filter['year'] = $date_data[1];
    }

    $data['staff_data'] = Staff::select(['id','first_name','last_name'])->where(['status'=>1, 'store_affiliation'=>$request->store_id ])->get();
    $staff_ids = $data['staff_data']->pluck('id');
    $data['availbility'] = StaffAvailable::where($filter)->whereIn('staff_id',$staff_ids)->get()->groupBy(['date','staff_id']);//where([''])

    //dd($data['availbility']->toArray());
 

    return response()->json($data);
  }




  public function staff_roaster(){

    return view('organization.staff_roaster');  
  }
    public function staff_available(){
  // $current_date =  date('Y-m-d');
      return view('organization.masters.staff.availability');
    }

    public function getStaffAvailData(){

      $next_month = date("m", strtotime("+1 month"));
      $year = date("Y", strtotime("+1 month"));

      $data = StaffAvailable::where(['month'=>$next_month, 'staff_id'=>Auth::id(), 'year'=>$year,'available'=>1])->get()->keyBy('day');
      return response()->json($data);

    }

    public function store(Request $request){
         // dd($request['available']);

    foreach($request['available'] as $key => $val){
      $date = date('Y-m-j',strtotime($request['date'][$val]));
      $check = StaffAvailable::where(['staff_id'=>1, 'date'=>$date]);
      // $shift = StaffAvailable::where(['staff_start'= > null, 'shift_end'=>null]);
      if($check->exists()){
          $model =  StaffAvailable::find($check->first()->id);
      }else{
        $model = new StaffAvailable();

      }
      if($request['shift_start'][$val] != null && $request['shift_end'][$val] != null){
      $model->shift_start = $request['shift_start'][$val];
      $model->shift_end = $request['shift_end'][$val];
      $model->date  =  date('Y-m-j',strtotime($request['date'][$val]));
      $model->day =   date('d',strtotime($request['date'][$val]));
      $model->month =   date('m',strtotime($request['date'][$val]));
      $model->year =   date('Y',strtotime($request['date'][$val]));
      $model->available = 1;
      $model->staff_id = Auth::id();
      $model->save();
    }
      // dump($model->id);
    }
    return response()->json(['success'=>"Available dates updated"]);

    }

    public function destroy($id)
    {
      $month = date("m", strtotime("+1 month"));
      $year = date("Y", strtotime("+1 month"));
      $string = "$year $month $id";
      $date = str_replace(' ', '-', $string);

      $model = StaffAvailable::where([('date')=>$date] , [('staff_id')=>1]);
      $model->delete();

      return response()->json(['success'=>"Available date removed"]);
    }

    public function roster_manager(){
      return view('staff.roster');
    }
}
