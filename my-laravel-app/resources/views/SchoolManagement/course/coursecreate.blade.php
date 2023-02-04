<p>create Course</p>


    <form action='/course_store' method="POST">
     @csrf
    <label>Branch Name*</label>
    <select name="branch_id">
    @foreach($branches as $branch)
        <option value='{{$branch->id}}'>{{$branch->bfull}}</option>
        @endforeach
    </select><br><br>
    <label>Course Name*</label>
    <input type='text' name='cname'  required/><br><br>


    <button type='submit'>Cancel</button>&nbsp;&nbsp;
    <button type='reset'>Reset</button>&nbsp;&nbsp;
    <button type='submit'>Add Course</button>

    </form>