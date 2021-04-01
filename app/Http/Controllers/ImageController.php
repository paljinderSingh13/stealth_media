<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;


class ImageController extends Controller
{
    public function create(){

       return $this->show();

        return view('image');
    }

    function createSlices($imageData) {
        $im = imagecreatefromstring($imageData);
        $sizeArray = getimagesizefromstring($imageData);
    
        
    }

    public function show(){

        return Storage::disk('s3')->response('images/wF9lQr8F2AfsCaEOGVBihfPw7XvlxbWlQYRQ9QdZ.png');

    }
    

    public function store(Request $request){

        $path = $request->file('image')->store('images', 's3');

        
        $img = Storage::disk('s3')->get('images/' . basename($path));

        return imagecreatefromstring($img);
        dump( basename($path), Storage::disk('s3')->url($path));
      //$new_img = Image::make($img)->response();

      s3://test-techies/images/Im1Fm3C2sofDg2JaCfZ0n5AdOdfPMG033C6m3VUw.png
      return Storage::disk('s3')->response('images/' . basename($path));
        //return view('image',['img'=>$new_img]);
    }
}
