<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class LibrayController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response() -> json($students);
    }
}
