@extends('layout/merge')
@section('content')
<h1>Show List</h1>

<table style='border: 1px solid black'>
<a href='/add'>Add</a>
<tr>
<th>ID</th>
<th>Name</th>
<th>Roll No</th>
<th>Email</th>
<th>Action</th>
</tr>
@foreach($lists as $list)
<td>{{$list->id}}</td>
<td>{{$list->name}}</td>
<td>{{$list->rollno}}</td>
<td>{{$list->email}}</td>
<td>
<a href='/edit/{{$list->id}}'>Edit</a>
<a href='/delete/{{$list->id}}'>Delete</a>
</td>
</tr>

@endforeach

</table>

@endsection
