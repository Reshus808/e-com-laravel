@extends('master')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide slide-div" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner slider-div">
    @foreach($products as $pro)
         <div class="carousel-item {{$pro['id'] == 1 ? 'active' : ''}}">
             <a href='detail/{{$pro['id']}}'>
             <img src="{{$pro['gallery']}}" class="slider-img" alt="image">
               <div class="carousel-caption d-none d-md-block para">
                 <h5>{{$pro['name']}}</h5>
                 <p>{{$pro['description']}}</p>
               </div>
             </a>
             </div>
       @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<div class='trending-wrapper'>
<h1>Trending Products</h1>
<div class="carousel-inner slider-div">
    @foreach($products as $pro)
         <div class="trending-items">
          <a href='detail/{{$pro['id']}}'>
               <img src="{{$pro['gallery']}}" class="trending-img" alt="image">
               <div class="carousel-caption d-none d-md-block">
                 <h5>{{$pro['name']}}</h5>
               </div>
</a>
             </div>
       @endforeach
  </div>

</div>
@endsection
