<?php

namespace App\Http\Controllers;
use App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index')->with('students',$students);
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new student;
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();


        return redirect()->route('index');


        //return view('store');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit')->with('student',$student);
    }

    public function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();
        return redirect()->route('index');


        //return view('store');
    }


    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('index');
    }
}
