@extends('master')
@section('content')
  <div class="custom-product">
    <div class='col-sm-10'>
    <div class='trending-wrapper'>
         <h4>Result for Products</h4>
         <a href='ordernow' class='btn btn-success'>Order Now</a><br/><br/>
           @foreach($products as $pro)
         <div class="row searched-item cart-list-devider">
         <div class="col-sm-3">
             <a href='detail/{{$pro->id}}'>
             <img class='trending-image' src="{{$pro->gallery}}" alt="image">
             </a>
             </div>
             <div class='col-sm-4'>
              <div class="">
                <h5>{{$pro->name}}</h5>
                  <p>{{$pro->description}}</p>
              </div>
             </div>
             <div class='col-sm-3'>
             <a class='btn btn-warning' href='removeCart/{{$pro->cart_Id}}'>Remove to Cart</a>
             </div>
             </div>
       @endforeach
</div>
<a href='ordernow' class='btn btn-success'>Order Now</a><br/><br/>
</div>
  </div>
@endsection
