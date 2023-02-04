@extends('master')
@section('content')
  <div class="custom-product">
    <div class='col-sm-10'>
    <div class='trending-wrapper'>
<table class="table table-striped">
    <tr>
      <td>Amount</td>
      <td>${{$total}}</td>
    </tr>
     <tr>
          <td>Tax</td>
          <td>${{$total}}</td>
        </tr>
         <tr>
              <td>Delivery</td>
              <td>${{$total}}</td>
            </tr>
          <tr>
               <td>Total Amount</td>
               <td>{{$total}}</td>
             </tr>

</table>
<div>
<form action='/orderplace' method='POST'>
@csrf
  <div class="form-group">
    <textarea name='address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Payment Method</label>
    <input type="radio" value='cash' name='payment'class="form-control"><span>online payment</span>
   <input type="radio"   value='cash' name='payment'class="form-control"><span>EMI payment</span>
    <input type="radio"  value='cash' name='payment'class="form-control"><span>Payment on Delivery</span>
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
</div>
 </div>
</div>
@endsection
