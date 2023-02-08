<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrayController extends Controller
{
    public function index()
    {
        $Student = Students::all();
        return response() -> json($student);
    }
}
