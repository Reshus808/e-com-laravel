@extends('layout/merge')
@section('content')
<h1>Edit Data</h1>

<form action='/update/{{$lists->id}}' method='POST'>

@csrf
@method('put')
Name : <input type='text' name='name' value={{$lists->name}} placeholder='enter your name'/><br/>
Roll NO : <input type='text' name='rollno' value={{$lists->rollno}}  placeholder='enter your Roll NO'/><br/>
Email : <input type='text' name='email'value={{$lists->email}} placeholder='enter your Email'/><br/>
 <button type='submit'>Submit</button>

</form>

@endsection
