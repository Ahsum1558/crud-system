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
				Profile of - <strong>Abdullah</strong>
			</div>
			<div class="card-body">
				<img class="shadow d-block m-auto" style="width: 200px; height: 200px; border-radius: 50%; border: 10px solid #fff;" src="{{ URL::to('public/assets/media/img/pp_photo/jhon.jpeg') }}" alt=""> <br>
				<table class="table">
					<tr>
						<td>Name</td>
						<td>Abdullah</td>
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