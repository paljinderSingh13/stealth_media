@extends('organization.layouts.layout')
  @section('content')
  <main  class="margin-top">
    <div id="app">

       <div class="container-fluid">
          <available store_route="{{route('store.available')}}" staff_avail_route="{{route('staff.availableData')}}" del_route="{{route('avail.del')}}"></available>
      </div>
    </div>
  </main>
  @endsection
