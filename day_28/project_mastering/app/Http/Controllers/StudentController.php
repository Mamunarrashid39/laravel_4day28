<?php

namespace App\Http\Controllers;

use App\Models\student\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        $student =new Student();
//        echo $student->name;

        foreach ($students->index() as student)
        {
            echo $student['name'].'<br>';
        }
     }
     public function index()
     {
         $student
     }
}
