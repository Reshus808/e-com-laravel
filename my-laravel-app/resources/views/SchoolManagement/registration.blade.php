@extends('SchoolManagement/layouts/app')


@section('content')
<p>Student Registration Page</p>

<section>
        @if(Session::has('coc'))
        <strong>{{session('coc')}}</strong>
    </section>
    @endif
    <form action='/store' method="POST" enctype="multipart/form-data">
     @csrf
    <label>Student Name*</label>
    <input type='text' name='sname' required/><br><br>

    <label>Father's Name*</label>
    <input type='text' name='fname' required/><br><br>

    <label>Class*</label>
    <input type='text' name='class' required/><br><br>

    <label>Phone Num*</label>
    <input type='text' name='phnum' required/><br><br>

    <label>Email*</label>
    <input type='text' name='email' required/><br><br>

   
    <label>Select Branch</label>
    <select name="branch_id" class="branches">
    <option>----- Select Branch -----</option>
    @foreach($branches as $branch)
        <option value='{{$branch->id}}'>{{$branch->bfull}}</option>
        @endforeach
    </select><br><br>


    <label>Select Course</label>
    <select name="course_id" class="courses" >
    <option>----- Select Course -----</option>
    </select><br><br>

        <label>Image:</label>
        <input name="image" id="image"type="file"><br>

    <button type='submit'>Cancel</button>&nbsp;&nbsp;
    <button type='reset'>Reset</button>&nbsp;&nbsp;
    <button type='submit'>Submit</button>

    </form>



<script type="text/javascript">
    
//     $(document).ready(function(){
//         $(".branch").css("color", "red");

// })
$(document).on("change", ".branches", function(){
    branch_id = $(this).val();
    // alert('hbn')
    // console.log(branch_id)
    $.ajax({
        url: 'student/courses',
        dataType: "json",
        data: {"id": branch_id, "_token": "{{csrf_token()}}"},
        method: "post",
        success: function(data){
            // console.log("data", data.courses);
            var courses = `<option>----- Select Course -----</option>`;
            var arr = data.courses.length;
            var aa = data.courses;
            for(var i = 0; i < arr; i++){
                courses += '<option value = "'+aa[i].id+'">'+aa[i].cname+'</option>';
            }
            $(".courses").html(courses);
        }
    })
})

</script>


@endsection

