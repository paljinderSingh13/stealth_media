<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Master\Store;
use Auth;

class StoreController extends Controller
{
    public function index(){

    	return view('masters.store');
    }

    public function save(Request $request){

    	$model = new Store();
    	$model->fill($request->all());
    	$model->created_by = Auth::guard('admin')->id();//($request->all());
    	$model->save();

    	return back();
    }
}
