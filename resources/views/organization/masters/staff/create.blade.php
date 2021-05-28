@extends('organization.layouts.layout')
  @section('content')
  <main  class="margin-top">
    <div id="app">
      <div class="container-fluid">
       <staff list_route="{{route('staff.list')}}" status_route="{{route('staff.status')}}" role_route="{{route('role.dropdown')}}" store_route="{{route('store.dropdown')}}" save_route="{{route('staff.save')}}" del_route="{{route('staff.del')}}" pstore_route="{{route('staff.store')}}"></staff>
      <br>
    </div>
  </div>
</main>
  @endsection
