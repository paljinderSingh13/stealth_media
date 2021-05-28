<div class="max-w-sm mx-auto py-8">
    <form action="{{route('img.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <input type="file" name="image" id="image">
        <button type="submit">Upload</button>
    </form>

    <img src="{{Storage::disk('s3')->url('images/0yaTKpL3V77zb7FYH1adDgauXK3RLNyLgkLEOXif.png')}}">

    <img src="{{Storage::disk('s3')->response('images/4iQGT3hRuCjmGXYMQEGyQjRjQCwjmeMdQfv1dyA2.png')}}" alt="">

   


</div>