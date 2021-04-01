<?php

namespace App\Http\Controllers\Organization\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Organization\Master\Product;
use Illuminate\Support\Facades\Validator;


class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Product::get();
        return response()->json($prod);
    }


    public function filter($filter, $search_filter)
    {
      $prod = Product::where($filter,$search_filter)->get();
      return response()->json($prod);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
          'prod_name' => 'required',
          'category' => 'required',
          'brand' => 'required',
          'supplier' => 'required',
          'model' => 'required',
          'imei' => 'required',
      ]);

      // if ($validator->fails()) {
      //     return ['response' => $validator->messages(), 'success' => false];
      // }
      if(!empty($request['id'])){
        $prod = Product::find($request->id);
        $prod->fill($request->all());
        $prod->save();
        return response()->json(['success'=>"Product Updated Successfully", $prod]);
      }else{
      // $request->validate(['prod_name'=>'unique:product','imei'=>'unique:product']);
      $prod = new Product();
      }
      $prod->fill($request->all());
      $prod->save();
      return response()->json(['success'=>"Product Inserted Successfully", $prod]);

    }

    //
    // public function update(Request $request, $id)
    // {
    //   $validator = Validator::make($request->all(), [
    //       'prod_name' => 'required',
    //       'category' => 'required',
    //       'brand' => 'required',
    //       'supplier' => 'required',
    //       'model' => 'required',
    //       'imei' => 'required',
    //   ]);
    //
    //   if ($validator->fails()) {
    //       return ['response' => $validator->messages(), 'success' => false];
    //   }
    //
    //   $prod = Product::find($id);
    //   $prod->fill($request->all());
    //   $prod->save();
    //   return response()->json(['success'=>"Product Updated Successfully", $prod]);
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Product::find($id);
        return response()->json($prod);
    }

    public function searchimei($input)
    {
        $prod = Product::where('imei',$input)->get();
        return response()->json($prod);
    }
    public function searchname($input)
    {
        $prod = Product::where('prod_name',$input)->get();
        return response()->json($prod);
    }

    public function supplier(){
        $prod = Product::distinct()->pluck('supplier');
        return response()->json($prod);
    }

    public function destroy($id)
    {
      $prod = Product::find($id);
      $prod->delete();

      return ['response' => 'Product Deleted Successfully', 'success' => true];
    }
}
