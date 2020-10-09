<?php

namespace App\Http\Controllers\Organization\Master;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('organization.masters.product.product');
    }

    public function add_product()
      {
        return view('organization.masters.product.product-create');
      }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
      $prod = new Client();
      $client = $prod->get('http://posdev.stg/api/product-api');
      $response = json_decode($client->getBody()->getContents());
      return response()->json($response);
      // dd($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  //   public function store(Request $request)
  //   {
  //     $this->validate($request, [
  //       'prod_name' => 'required',
  //       'category' => 'required',
  //       'brand' => 'required',
  //       'supplier' => 'required',
  //       'model' => 'required',
  //       'imei' => 'required',
  //     ]);
  //
  //     $client = new Client();
  //     if(!empty($request['id'])){
  //       try{
  //         $items = $client->post('http://posdev.stg/api/product-api/'.$request->id.'?prod_name='.$request->input('prod_name').'&category='.$request->input('category').'&brand='.$request->input('brand').'&supplier='.$request->input('supplier').'&model='.$request->input('model').'&imei='.$request->input('imei').'&stock='.$request->input('stock').'&sales='.$request->input('sales').'&_method=PUT');
  //
  //       }
  //       catch(RequestException $e){
  //         if ($e->hasResponse()) {
  //             $msg = $e->getResponse();
  //         }else{
  //           $msg = 'Product could not be updated';
  //         }
  //     }
  // }else{
  //     // $request->validate(['prod_name'=>'unique:product','imei'=>'unique:product']);
  //
  //     try{
  //       $prod = $client->post('http://posdev.stg/api/product-api?prod_name='.$request->input('prod_name').'&category='.$request->input('category').'&brand='.$request->input('brand').'&supplier='.$request->input('supplier').'&model='.$request->input('model').'&imei='.$request->input('imei').'&stock='.$request->input('stock').'&sales='.$request->input('sales'));
  //
  //     }
  //     catch(RequestException $e){
  //       if ($e->hasResponse()) {
  //           $msg = $e->getResponse();
  //       }else{
  //         $msg = 'Product could not be inserted';
  //       }
  //       return redirect()->to('/product')->with('error', $msg);
  //
  //     }
  //
  //     return response()->json(['success'=>"Product inserted Successfully", $prod]);
  //   }
  // }
    public function edit($id)
    {

      $prod = new Client();
      $client = $prod->get('http://posdev.stg/api/product-api/'.$id);
      $response = json_decode($client->getBody()->getContents());
      // dd($response);

      return response()->json('prod', $response);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function search($input)
    // {
    //   $prod = new Client();
    //   $client = $prod->get('http://posdev.stg/api/product-api', ['where'=>['imei'=>$input]]);
    //   $response = json_decode($client->getBody()->getContents());
    //   dd($response);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $client = new Client();
      $prod = $client->post('http://posdev.stg/api/product-api/'.$id.'?_method=DELETE');

      $contents = json_decode($prod->getBody()->getContents());

      $success = $contents->success;
      if($success){
        return response()->json(['success'=>"Product Deleted Successfully"]);

      }else{
        return response()->json(['error'=>"Product could not be deleted"]);

      }
    }
}
