@extends('organization.layouts.layout')
  @section('content')
    <main>
      <div id="app">
     <div class="container-fluid">
       <role list_route="{{route('role.list')}}" role_type_route="{{route('role.type')}}" store_route="{{route('role.save')}}" del_route="{{route('role.del')}}" status_route="{{route('role.status')}}"></role>
      <br>
    </div>
  </div>
</main>
  @endsection
