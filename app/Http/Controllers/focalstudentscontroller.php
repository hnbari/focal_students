<?php

namespace App\Http\Controllers;

use App\Models\focal_students;
use Illuminate\Http\Request;

class focalstudentscontroller extends Controller
{
    public function index()
    {
        $focalstudents = focal_students::all();
        return $focalstudents;
    }
}
