@extends('organization.layouts.layout')
  @section('content')

<main class="margin-top default-transition" style="opacity: 1;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <h3 class="hding-pos">PROJECTS</h3>
                  <div class="separator mb-5"></div>
               </div>
<table class="table">
<tr>
<th>day</th>
<th>Slot 1</th>
<th>Slot 2</th>

</tr>

@foreach($dr->slot as $val)
<tr>
<td>{{$val['day']}}</td>
@foreach($val->schedule as $key => $slot)


   <td>{{$slot['start']}} - {{$slot['end']}}</td>

@endforeach

</tr>

@endforeach


</table>

            </div>

            <div id="app">



   <store-component detail_route="{{route('project.detail')}}" sale_user="{{route('sale.user')}}" status_route="{{route('store.status')}}" list_route="{{route('store.data')}}" store_id_route="{{route('store.id')}}" store_route="{{route('store.save')}}" del_route="{{route('store.del')}}"></store-component>
            </div>

         </div>
      </main>




@endsection
