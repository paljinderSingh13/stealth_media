@extends('organization.layouts.layout')
  @section('content')
    <main>
      <div id="app">
     <div class="container-fluid">
       <product filter_route="{{route('product.filter')}}" list_route="{{route('product.data')}}" store_route="{{route('product.store')}}" del_route="{{route('product.delete')}}" search_imei_route="{{route('product.searchimei')}}" search_name_route="{{route('product.searchname')}}"></product>
      <br>
    </div>
  </div>
</main>
  @endsection
