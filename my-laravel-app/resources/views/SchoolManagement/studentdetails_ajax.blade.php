
@foreach($students as $stu)
<tr>
        <td>{{$stu->id}}</td>
        <td>{{$stu->sname}}</td>
        <td>{{$stu->fname}}</td>
        <td>{{$stu->class}}</td>
        <td>{{$stu->phnum}}</td>
        <td>{{$stu->email}}</td>
        <td><a href='/fee-form/{{$stu->id}}'  class="btn btn-success">Fee</a></td>

        <td> <a href='/student_show/{{$stu->id}}'  class="btn btn-success">Show</a></td>
        <td><a href='/student_edit/{{$stu->id}}'  class="btn btn-primary">Edit</a></td>
        <td><a href='/student_delete/{{$stu->id}}'  class="btn btn-danger">Delete</a><td>

    </tr>
    @endforeach
    <tr class="pg_link"><td colspan="7">{{$students->links()}}</td></tr>


