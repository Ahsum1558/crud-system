<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
	/**
	* All Students show
	*/
    public function index(){
    	return view('student.index');
    }

    /**
	* Add new student
	*/
    public function create(){
    	return view('student.create');
    }

}
