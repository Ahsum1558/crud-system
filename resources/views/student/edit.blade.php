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
			<div class="card-body">
				<h2>Update Student Data</h2>
				@include('validate')


				<form action="{{ url('/student/update') }}/{{ $edit_data -> id }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value="{{ $edit_data -> name }}">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="{{ $edit_data -> email }}">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" value="{{ $edit_data -> cell }}">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text" value="{{ $edit_data -> age }}">
					</div>
					<div class="form-group">
						<label for="">Location</label>
						<input name="location" class="form-control" type="text" value="{{ $edit_data -> location }}">
					</div>
					<div class="form-group">
						<img style="width: 200px;" src="{{ URL::to('') }}/public/media/students/{{ $edit_data -> photo }}" alt="">
						<input name="old_photo" class="form-control" type="hidden" value="{{ $edit_data -> photo }}">
						<input name="new_photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>







	<!-- JS FILES  -->
	<script src="{{ asset('public/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/custom.js') }}"></script>
</body>
</html>