<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Assignment;

class AssignmentsController extends Controller
{
    public function show(){

      $student = Student::find(1);

      $assignment = new Assignment();
      $assignment->mark = 100;
      $assignment->name = "asdasd";

      $student->assignments()->save($assignment);
      return view('assignments.show',['students'=>$students]);

      // $assignments = Assignment::where('student_id',$student->id)->get();
      //
      // dd($assignments);

    }
}
