<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function index()
{
    $students = DB::table('daftarmhs')->get();
    return view('daftarmhs.index', compact('students'));
}

}
