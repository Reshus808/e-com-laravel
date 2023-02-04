@extends('layout.main')

@section('main')

 <h2 class='container'>Show All Category <a href='category_add' type="button" class="btn btn-primary">Add Category</a>
</h2>
@if(session()->has('success'))
<strong>{{session()->get('success')}}</strong>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category -> id}}</th>
<!--       <th scope="row">{{$loop -> index + 1}}</th> -->
<!--       <td>{{$category -> title}}</td> -->
<td>{{$category['title']}}</td>
      <td>
          <a href={{"category_edit/".$category['id']}} class="btn btn-primary">Edit</a>
          <a href='/category_delete/{{$category->id}}'  class="btn btn-danger">Delete</a>
    </tr>
    @endforeach
  </tbody>
</table>
<div>{{$categories->links()}}</div>

@endsection

