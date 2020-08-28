<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Student;

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

     /**
	* Student Data Store
	*/
    public function store(Request $val){

    	if ( $val -> hasFile('photo') ) {
    		$img = $val -> file('photo');
    		$unique_file_name = md5(time().rand()) . '.' . $img -> getClientOriginalExtension();
    		$img -> move(public_path('media/students/') , $unique_file_name);
    	}

    	$this -> validate($val, [
    		'name' => 'required',
    		'email' => 'required|unique:students',
    		'cell' => 'required|unique:students',
    	],[
    		'name.required' 	=> 'Name Field must not be Empty',
    		'email.required' 	=> 'Please insert your Email Address',
    		'cell.required' 	=> 'Cell Field is required',
    	]);

    	Student::create([
    		'name' 		=> $val -> name,
    		'email'		=> $val -> email,
    		'cell' 		=> $val -> cell,
    		'age' 		=> $val -> age,
    		'location' 	=> $val -> location,
    		'photo' 	=> $unique_file_name,
    	]);
    	return redirect() -> back() -> with('success', 'Student added successfull');
    }

}
