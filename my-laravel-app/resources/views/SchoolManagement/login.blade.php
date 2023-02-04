@extends('SchoolManagement/layouts/app')


@section('content')
<body>
    <div class="firstDiv">
    <h2>Login Page</h2>
        @if(Session::has('coc'))
        <section id="timer">
        <strong>{{session('coc')}}</strong>
        </section>
    @endif
    <form action='/login' method="POST">
     @csrf
    <label>Username</label><br>
    <input type='text' name='username' required/><br><br>

    <label>Password</label><br>
    <input type='text' name='password' required/><br><br>


    <button type='submit'>Submit</button>
    </form>
</div>
</body>
</html>

<style>
 
body{
    background-color: #9898ab;
}

.firstDiv{
    margin: auto;
    background: white;
    width: 40rem;
    height: 50rem;
    color: white;
    margin-top: 10rem;
    font-size: 30px;
}

h2{
    text-align: center;
    padding: 20px 0;
    background: green;
    color: white;
    margin-top: 10rem;
    font-size: 30px;
}
form{
    color: black;
    margin-left: 6rem;
    margin-top: 2rem;
}
label{
    font-size: 18px;
}
input{
    border: none;
    border-bottom: 1px solid black;
    outline: none;
    font-size: 18px;
    width: 27rem;
}

button{
    color: white;
    background: blue;
    border: none;
    font-size: 17px;
    padding: 12px 50px;
    text-align: center;
    width: 80%;
    cursor: pointer;
    border-radius: 20px;
    /* margin-right: -30px; */

}

button:hover{
        background: darkblue;
    }


    section{
    width: 40rem;
    background: #6c69df;
    text-align: center;
    padding: 20px 0;
    font-size: 18px;
    margin-top: -10px;
    color: red;
    }
strong{

}

</style>

<script>
    $(document).ready(function(){
        // alert('hello')
        $('#timer').hide(5000)
    })
</script>
@endsection
