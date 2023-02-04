@extends('layout/merge')
@section('content')
<h1>Add Data</h1>

<form action='/store' method='POST'>

@csrf

Name : <input type='text' name='name' placeholder='enter your name'/><br/>
Roll NO : <input type='text' name='rollno' placeholder='enter your Roll NO'/><br/>
Email : <input type='text' name='email' placeholder='enter your Email'/><br/>
 <button type='submit'>Submit</button>

</form>

@endsection
