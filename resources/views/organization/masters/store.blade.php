@extends('organization.layouts.layout')
  @section('content')

<main class="margin-top default-transition" style="opacity: 1;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <h3 class="hding-pos">PROJECTS</h3>
                  <div class="separator mb-5"></div>
               </div>
            </div>

            <div id="app">



   <store-component sale_user="{{route('sale.user')}}" status_route="{{route('store.status')}}" list_route="{{route('store.data')}}" store_id_route="{{route('store.id')}}" store_route="{{route('store.save')}}" del_route="{{route('store.del')}}"></store-component>
            </div>

         </div>
      </main>




@endsection
