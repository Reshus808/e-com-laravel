@extends('master')
@section('content')
  <div class="custom-product">
    <div class='col-sm-4'>
        <a href='#'>Filter</a>
    </div>  
    <div class='col-sm-4'>
    <div class='trending-wrapper'>
         <h4>Result for Products</h4>
           @foreach($products as $pro)
         <div class="searched-item">
             <a href='detail/{{$pro['id']}}'>
             <img src="{{$pro['gallery']}}" alt="image">
               <div class="">
                 <h5>{{$pro['name']}}</h5>
                 <p>{{$pro['description']}}</p>
               </div>
             </a>
             </div>
       @endforeach
</div>
</div>
  </div>
@endsection
