<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }
    public function edit(){
        return view('student.edit');

    }
    public function delete(){
        return view('student.delete');
    }
    public function get(Request $req){

        $student = array(
            "name" => "$req->name",
            "id" => "$req->id",
            "dob" => "$req->dob"
        );
            $student = (object) $student;
        //return var_dump($student);
        return view('student.get')->with('student', $student);
    }
    public function list(){
        $students = [];
        for($i=1;$i<=10;$i++){
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            $student = array(
                "name"=> "Student $i",
                "id"=> $i,
                "dob" => $date
            );
            $students[] = (object)$student;
        }
        //return $students;
        return view('student.list')->with('students',$students);

    }
}
