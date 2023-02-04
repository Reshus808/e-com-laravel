@extends('master')
@section('content')
  <div class="custom-product">
    <div class='col-sm-10'>
    <div class='trending-wrapper'>
         <h4>My Orders</h4>
         <a href='ordernow' class='btn btn-success'>Order Now</a><br/><br/>
           @foreach($orders as $pro)
         <div class="row searched-item cart-list-devider">
         <div class="col-sm-3">
             <a href='detail/{{$pro->id}}'>
             <img class='trending-image' src="{{$pro->gallery}}" alt="image">
             </a>
             </div>
             <div class='col-sm-4'>
              <div class="">
                <h5>Name : {{$pro->name}}</h5>
                  <p>Delivery Status : {{$pro->status}}</p>
                   <p>Address : {{$pro->address}}</p>
                    <p>Payment Method : {{$pro->payment_method}}</p>
                     <p>Payment Status : {{$pro->payment_status}}</p>
              </div>
             </div>
             </div>
       @endforeach
</div>
</div>
  </div>
@endsection
