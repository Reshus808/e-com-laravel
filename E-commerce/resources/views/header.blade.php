<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();

}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-Comm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item ">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Add To Card</a>
      </li>
    </ul>
    <form action='/search' class="d-flex">
      <input class="form-control mr-2 search-box" name='query' type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <ul class='session-div'>
      <li><a href='/cartList'>Cart Item ({{$total}})</a></li>
      @if(Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item"  href="/logout">Logout</a>
        </div>
      </li>
      @else

      <li><a href='/login'>Login</a></li>
     <li><a href='/register'>Register</a></li>

      @endif
</ul>
  </div>
</nav>
