@extends('layouts.layout')
  @section('content')
<main class="margin-top default-transition" style="opacity: 1;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <h1 class="hding-pos">Store</h1>
                  <div class="separator mb-5"></div>
               </div>
            </div>
           
			<div class="row">
               <div class="col-8 offset-2">
					<div class="card mb-4">
                        <div class="card-body">
                            <form method="post" action="{{route('store.save')}}">
                            	@csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputname">Name</label>
                                        <input name="name" type="text" class="form-control" id="inputEname" placeholder="Name">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input name="address_2" type="text" class="form-control" id="inputAddress2" placeholder="Address 2">
                                </div>
                                <div class="form-row">
                                   <div class="form-group col-md-6">
                                        <label for="inputState">Country</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                   <div class="form-group col-md-6">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
								<div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputcity">City</label>
                                        <select id="inputcity" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-primary d-block mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </main>
@endsection