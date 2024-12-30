<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoanController extends Controller
{
    public function index()
{
    $loans = DB::table('daftarpinjam')->get();
    return view('daftarpinjam.index', compact('loans'));
}

}
