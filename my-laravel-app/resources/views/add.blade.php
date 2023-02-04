@extends('layout.main')

@section('main')

<h2 class='container'>Add Category</h2>
<form method='POST' action='category_store'>

@csrf
  <div class="form-group">
    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" placeholder="enter category">
    @if($errors->has('title'))
    <p class='text-danger'>{{ $errors->first('title')}}</p>
    @endif
   <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>

@endsection
