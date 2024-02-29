<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getStudents(){
        return Student::all();
    }
    public function showStudents(){
        $students = Student::all();
        return view('students', compact('students'));
    }
    public function getStudentById($id){
        $students=Student::all();
        foreach($students as $student){
            if($student->id == $id){
                return $student;
            }
            else{
                return "Student not
                found";
            }
        }
    } 
}