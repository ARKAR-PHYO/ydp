@extends('backend_template')
@section('content')
<div class="col-8">
	<h1>Add New Student</h1>
	<form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
		@csrf
		<label>Name</label> <br>
		<input type="text" name="name" id="name" class="form-control"><br>
		<label>Email</label> <br>
		<input type="text" name="email" id="email" class="form-control"> <br>
		<label>Phone Number</label> <br>
		<input type="text" name="ph_no" id="ph_no" class="form-control"> <br>
		<label>Address</label> <br>
		<input type="text" name="address" id="address" class="form-control"> <br>
		<label>Batch</label> <br>
		<select id="batch_id" name="batch_id" class="form-control">
			@foreach ($batches as $row)
			<option value="{{$row->id}}">{{$row->name}}</option>
			@endforeach
		</select><br>
		<label>Photo</label> <br>
		<input type="file" name="photo" id="photo" class="form-control-file" > <br>
		
		<label for="password" >{{ __('Password') }}</label>

		<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

		@error('password')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
		<br>
			<label for="password-confirm">{{ __('Confirm Password') }}</label>

				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
			<br>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection