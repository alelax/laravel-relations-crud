<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Assignment;

class StudentsController extends Controller
{
    //
    public function show(){

      $students = Student::all();

      //TUTTI GLI STUDENTI
      return view('students.show',['students'=>$students]);
    }

    public function add(Request $request){

      if($request->method() == "GET")
        return view('students.add');

      elseif ($request->method() == "POST") {

        $student = new Student();
        $student->name = $request->input('name');
        $student->lastname = $request->input('lastname');
        $student->age = $request->input('age');

        //Server-side checks
        // if (!is_numeric($student->age)){
        //   $request->session()->flash('error',"Age not correct format");
        //   return view('students.add');
        // }

        $validatedData = $request->validate([
          'age' => 'required|integer|max:99',
          'name' => 'required'
        ]);

        $result = $student->save();

        // if ($result == false){
        //   dd('not saved');
        // }

        return redirect()->route('students.show');

      }
    }

    public function edit(Request $request, Student $student){
      $student = Student::find($id);

      $assignments = Assignment::where(['student_id'=>$student->id]);


      if($request->method() == "GET"){
        return view('students.edit',['s'=>$student]);
      }

      elseif ($request->method() == "POST") {
        //update
        // $student->name = $request->input('name');
        // $student->lastname = $request->input('lastname');
        // $student->age = $request->input('age');
        //
        // $student->save();
        $validatedData = $request->validate([
          'age' => 'required|integer|max:99',
          'name' => 'required'
        ]);

        $student->update($request->all());

        return redirect()->route('students.show');

      }
    }

}
