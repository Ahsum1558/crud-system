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
				<h2>Add New Student</h2>
				<!-- @foreach( $errors -> all() as $err )
				<p class="alert alert-danger">{{ $err }}<button class="close" data-dismiss="alert">&times;</button></p>
				@endforeach -->
				@if( $errors -> any() )
				<p class="alert alert-danger"> {{ $errors -> first() }} <button class="close" data-dismiss="alert">&times;</button></p>
				@endif

				@if( Session::has('success') )
				<p class="alert alert-success"> {{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button> </p>
				@endif


				<form action="{{ url('/student/store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value="{{ old('name') }}">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="{{ old('email') }}">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" value="{{ old('cell') }}">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text" value="{{ old('age')}}">
					</div>
					<div class="form-group">
						<label for="">Location</label>
						<input name="location" class="form-control" type="text" value="{{ old('location') }}">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add Student">
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