<p>Edit branch</p>


    <form action='/branch_update/{{$edit->id}}' method="POST">
     @csrf
    <label>Branch Sort Name*</label>
    <input type='text' name='bsort' value="{{$edit->bsort}}" required/><br><br>

    <label>Branch Full Name*</label>
    <input type='text' name='bfull'  value="{{$edit->bfull}}" required/><br><br>


    <button type='submit'>Cancel</button>&nbsp;&nbsp;
    <button type='reset'>Reset</button>&nbsp;&nbsp;
    <button type='submit'>Add Branch</button>

    </form>