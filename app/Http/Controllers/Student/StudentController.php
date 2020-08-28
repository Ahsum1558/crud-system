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

     /**
	* Edit Student Data
	*/
     public function edit($id){

     	$edit_data = Student::findOrFail($id);

    	return view('student.edit', compact('edit_data'));
    }

     /**
	* Update Student Data
	*/
     public function update(Request $val, $id){

     	$this -> validate($val, [
    		'name' => 'required',
    		'email' => 'required',
    		'cell' => 'required',
    	],[
    		'name.required' 	=> 'Name Field must not be Empty',
    		'email.required' 	=> 'Please insert your Email Address',
    		'cell.required' 	=> 'Cell Field is required',
    	]);

    	if ($val -> hasFile('new_photo')) {
    		$img = $val -> file('new_photo');
    		$unique_file_name = md5(time().rand()) . '.' . $img -> getClientOriginalExtension();
    		$img -> move(public_path('media/students/') , $unique_file_name);

    		unlink('public/media/students/' . $val -> old_photo);
    	}else{
    		$unique_file_name = $val -> old_photo;
    	}


     	$edit_data = Student::findOrFail($id);

     	$edit_data -> name 		= $val -> name;
     	$edit_data -> email 	= $val -> email;
     	$edit_data -> cell 		= $val -> cell;
     	$edit_data -> age 		= $val -> age;
     	$edit_data -> location 	= $val -> location;
     	$edit_data -> photo 	= $unique_file_name;
     	$edit_data -> update();

    	return redirect() -> back() -> with('success', 'Student data updated successfully');
    }

}
