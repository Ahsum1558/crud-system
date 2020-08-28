<!-- @foreach( $errors -> all() as $err )
				<p class="alert alert-danger">{{ $err }}<button class="close" data-dismiss="alert">&times;</button></p>
				@endforeach -->
				@if( $errors -> any() )
				<p class="alert alert-danger"> {{ $errors -> first() }} <button class="close" data-dismiss="alert">&times;</button></p>
				@endif

				@if( Session::has('success') )
				<p class="alert alert-success"> {{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button> </p>
				@endif