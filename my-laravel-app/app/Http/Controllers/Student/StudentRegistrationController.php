<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Course;
use App\Models\Branch;
use App\Models\Fee;


class StudentRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $student_cols = $request->param;
        // if($student_cols){
        //     $student = Registration::select('id', 'sname');
        //     foreach($student_cols as $key => $value){
        //         $student->addselect($value);
        //     }
        //     $students = $student->paginate(4);

        // }
        // else{
        //     $students = Registration::select('id','sname')->paginate(4);
        // }
        if($request->ajax()){
            $student_cols = $request->get('filter');
            if($student_cols){
                $columns = explode(',', $student_cols);
                $student = Registration::select('id', 'sname');
                foreach($columns as $key => $value){
                    $student->addselect($value);
                }
                // dd($columns );
                $students = $student->paginate(4);
                return view('SchoolManagement.studentdetails_ajax', compact('students'));
    
    
            }
            else{
                $students = Registration::select('id','sname')->paginate(4);
                return view('SchoolManagement.studentdetails_ajax', compact('students'));
            }
        }else{
            $students = Registration::select('id', 'sname')->paginate(4);
            return view('SchoolManagement.homePage', compact('students'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::all();
        $branches = Branch::all();
        return view('SchoolManagement.registration', compact('branches', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        // $image = $request->image;
        // $name = $image->getClientOriginalName();

        $register = new Registration;
        $register->sname = $request->sname;
        $register->fname = $request->fname;
        $register->class = $request->class;
        $register->phnum = $request->phnum;
        $register->email = $request->email;
        $register->course_id = $request->course_id;
        $register->branch_id = $request->branch_id;
        $register->image = $request->file("image")->getClientOriginalName();
        // $register->image = $name;
        $register->save();

        $request->image->move(public_path('postimg'),$register->image);

        // dd($registration);
        return redirect('details');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $id = $request->id;
        $student = Registration::where(['id'=>$id])->get();
        // print_r($student);
        return view('SchoolManagement.studentshow', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = Registration::find($id);
        return view('SchoolManagement.studentedit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $edit = Registration::find($id);
        $edit->sname = $request->sname;
        $edit->fname = $request->fname;
        $edit->class = $request->class;
        $edit->phnum = $request->phnum;
        $edit->email = $request->email;
        $edit->save();
        
        return redirect('details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deletedata = Registration::where('id', $id)->delete();
        // $deletedata->delete();
        return redirect('details');
    }


    public function courses(Request $req){
        $id = $req->id;
        $data["courses"] = Course::where('branch_id',$id)->get();
        echo json_encode($data);
        // dd($data);
    }

    public function ajax_show(Request $request){
        if($request->ajax()){
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $search = $request->get('search');
            $search = str_replace(" ", "%", $search);

            $students = Registration::where('sname', 'like', '%'.$search.'%')
            ->orWhere('fname', 'like', '%'.$search.'%')
            ->orderBy($sort_by, $sort_type)
            ->paginate(3);
            return view('SchoolManagement.studentdetails_ajax', compact('students'));
        }
    }

// public function fee_form(Request $request){
//     $id = $request->id;
//     $fee = Fee::where(['student_id'=>$id])->get();
//     return view('SchoolManagement.studentfee', compact(['fee', 'id']));
// }

// public function feeadd(Request $request){
//     $fee = new Fee;
//     $id = $request->id;
//     $fee->student_id = $request->id;
//     $fee->amount = $request->amount;
//     $fee->save();

//   return redirect('details', ['id'=>$id]);
// }

public function fee_form(Request $request){
    $id = $request->id;
    $fee = Fee::where(['student_id'=>$id])->get();
    return view('SchoolManagement.studentfee',compact(['fee','id']));
}
public function feeadd(Request $request){
    $fee = new Fee;
    $id = $request->id;
    $fee->student_id = $request->id;
    $fee->amount = $request->amount;
    $fee->save();
    // return redirect('details', ['id' => $id]);
    return redirect('details');
}

}
