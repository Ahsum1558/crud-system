<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>
	
	

	<div class="wrap">
		<a class="btn btn-sm btn-primary" href="{{ url('/student') }}">All Students</a>
		<div class="card shadow">
			<div class="card-header">
				Profile of - <strong>{{ $single_student_data -> name }}</strong>
			</div>
			<div class="card-body">
				<img class="shadow d-block m-auto" style="width: 200px; height: 200px; border-radius: 50%; border: 10px solid #fff;" src="{{ URL::to('') }}/public/media/students/{{ $single_student_data -> photo }}" alt=""> <br>
				<table class="table">
					<tr>
						<td>Name</td>
						<td>{{ $single_student_data -> name }}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{ $single_student_data -> email }}</td>
					</tr>
					<tr>
						<td>Cell</td>
						<td>{{ $single_student_data -> cell }}</td>
					</tr>
					<tr>
						<td>Age</td>
						<td>{{ $single_student_data -> age }}</td>
					</tr>
					<tr>
						<td>Location</td>
						<td>{{ $single_student_data -> location }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{ asset('public/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/custom.js') }}"></script>
</body>
</html>