<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
	{
		$student=DB::select('select * from student');
		//dd($student);
		return view('index',['result'=>$student]);
	}
}
