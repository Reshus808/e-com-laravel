<p>Show branch</p>

<table border='1'>

<thead>
    <tr>
        <th>ID</th>
        <th>Branch Sort Name</th>
        <th>Branch Full Name</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($shows as $branch)
<tr>
        <td>{{$branch->id}}</td>
        <td>{{$branch->bsort}}</td>
        <td>{{$branch->bfull}}</td>
        <td><a href='/branch_edit/{{$branch->id}}'  class="btn btn-danger">Edit</a>
        <a href='/branch_edit/{{$branch->id}}'  class="btn btn-danger">Show</a>
        <a href='/branch_delete/{{$branch->id}}'  class="btn btn-danger">Delete</a><td>

    </tr>
    @endforeach
</tbody>
</table>
