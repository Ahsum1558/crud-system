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
    	// $data = Student::all(); //as database
    	$data = Student::latest() -> get(); // as latest
    	return view('student.index', [
    		'all_student' => $data
    	]);
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

    /**
	* Show Student Data
	*/
     public function show($id){
    	// $single_student_data = Student::find($id);
    	$single_student_data = Student::findOrFail($id);
    	return view('student.show', compact('single_student_data'));
    }

    /**
	* Delete Student Data
	*/
     public function destroy($id){
    	$data = Student::find($id);
    	$data -> delete();

    	unlink('public/media/students/' . $data -> photo);

    	return redirect() -> back() -> with('success', 'Student data deleted successfully');
    }

}
