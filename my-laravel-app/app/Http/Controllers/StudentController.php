<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //

    function show()
    {
      $data = Student::all();
      return view('student/show', ['lists'=>$data]);
    }

     function add()
        {
          return view('student/add');
        }

      function store(Request $req)
             {
               $req->validate([
                           'name'=>'required',
                           'rollno'=>'required',
                           'email'=>'required',
                           ]);
             $data = new Student;
             $data->name=$req->name;
             $data->rollno=$req->rollno;
             $data->email=$req->email;
            $result = $data->save();
             }

       function edit(Request $req, $id)
       {
        $data = Student::find($id);
        return view('student/edit', ['lists'=>$data]);
       }


        function update(Request $req, $id)
                    {
                    $data = student::find($id);
                    $data->name=$req->name;
                    $data->rollno=$req->rollno;
                    $data->email=$req->email;
                    $data->save();
                    return redirect('/');
                    }

 function delete($id)
       {
        $data = Student::find($id);
        $data->delete();
        return redirect ('/');
       }


  function filterCheck(){
  return view('filter');
  }
}
