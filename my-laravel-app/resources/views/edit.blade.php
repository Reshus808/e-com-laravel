@extends('layout.main')

@section('main')

<h2 class='container'>Edit Category</h2>
<form method='POST' action='/category_update/{{$category->id}}'>
@csrf
@method('put')
  <div class="form-group">
    <input type="text" name='title' value='{{$category->title}}' class="form-control">
              <button type="submit" class="btn btn-primary">Update</button>

  </div>
</form>

@endsection
