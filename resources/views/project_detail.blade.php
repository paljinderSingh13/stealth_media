@extends('organization.layouts.layout')
  @section('content')

<main class="margin-top default-transition" style="opacity: 1;">
         <div class="container-fluid">


            <div id="app">

            <product-detail chat_data="{{route('project.chat.data')}}"  new_chat_route="{{route('project.chat.send')}}"  detail_route="{{route('project.detail.data',['pid'=>$pid])}}"></product-detail>

   <!-- <store-component sale_user="{{route('sale.user')}}" status_route="{{route('store.status')}}" list_route="{{route('store.data')}}" store_id_route="{{route('store.id')}}" store_route="{{route('store.save')}}" del_route="{{route('store.del')}}"></store-component> -->
            </div>

         </div>
      </main>




@endsection
