<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Students</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>
	
	

	<div class="wrap-table">
		@include('validate')
		<a class="btn btn-sm btn-primary" href="{{ url('student/create') }}">Add New Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach( $all_student as $student )
						<tr>
							<td>{{ $loop -> index + 1 }}</td>
							<td>{{ $student -> name }}</td>
							<td>{{ $student -> email }}</td>
							<td>{{ $student -> cell }}</td>
							<td><img src="{{ URL::to('') }}/public/media/students/{{ $student -> photo }}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{ url('student/show') }}/{{ $student -> id }}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ url('student/edit') }}/{{ $student -> id }}">Edit</a>
								<a id="delete_data" class="btn btn-sm btn-danger" href="{{ url('student/destroy') }}/{{ $student -> id }}">Delete</a>
							</td>
						</tr>	
						@endforeach

					</tbody>
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