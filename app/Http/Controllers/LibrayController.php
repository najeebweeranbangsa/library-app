<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrayController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view ('students.inde)->with('students', $students);
    }
}
