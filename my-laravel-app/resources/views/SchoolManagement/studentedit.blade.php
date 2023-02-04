
<p>Student edit Page</p>

    <form action='/student_update/{{$edit->id}}' method="POST">
     @csrf
    <label>Student Name*</label>
    <input type='text' name='sname' value= "{{$edit->sname}}" required/><br><br>

    <label>Father's Name*</label>
    <input type='text' name='fname' value= "{{$edit->fname}}" required/><br><br>

    <label>Class*</label>
    <input type='text' name='class' value= "{{$edit->class}}" required/><br><br>

    <label>Phone Num*</label>
    <input type='text' name='phnum' value= "{{$edit->phnum}}" required/><br><br>

    <label>Email*</label>
    <input type='text' name='email' value= "{{$edit->email}}" required/><br><br>


    <button type='submit'>Cancel</button>&nbsp;&nbsp;
    <button type='reset'>Reset</button>&nbsp;&nbsp;
    <button type='submit'>Submit</button>

    </form>