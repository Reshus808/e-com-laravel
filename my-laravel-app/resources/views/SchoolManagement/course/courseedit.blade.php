<p>Edit Course</p>


    <form action='/course_update/{$course->id}' method="POST">
     @csrf
    <label>Branch Name*</label>
    <input type='text' name='branch_id' value="{{$course->branch_id}}" required/><br><br>

    <label>Course Name*</label>
    <input type='text' name='bfull' value="{{$course->cname}}"  required/><br><br>


    <button type='submit'>Cancel</button>&nbsp;&nbsp;
    <button type='reset'>Reset</button>&nbsp;&nbsp;
    <button type='submit'>Update Course</button>

    </form>