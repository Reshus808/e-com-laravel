<p>show course</p>
<table border='1'>

<thead>
    <tr>
        <th>Branch Name</th>
        <th>Course Name</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($courses as $course)
<tr>
        <td>{{$course->bfull}}</td>
        <td>{{$course->cname}}</td>
        <td><a href='/course_edit/{{$course->id}}'  class="btn btn-danger">Edit</a>
        <a href='/course_edit/{{$course->id}}'  class="btn btn-danger">Show</a>
        <a href='/course_delete/{{$course->id}}'  class="btn btn-danger">Delete</a><td>

    </tr>
    @endforeach
</tbody>
</table>
