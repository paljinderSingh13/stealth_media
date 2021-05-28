@extends('organization.layouts.layout')
  @section('content')
  
  <main id="app"  class="margin-top">
  
     <roster roster_store_route="{{route('roster.store')}}"  store_staff_route="{{route('store.staff')}}"  store_route="{{route('store.dropdown')}}"></roster>
      </main>
  @endsection
