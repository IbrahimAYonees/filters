<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        return Course::filter($request)->get();
    }
}
