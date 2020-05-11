@extends('backend_template')
@section('content')
<div class="col-8">
	<h1>Add New Course</h1>
	<form method="POST" action="{{route('course.store')}}" enctype="multipart/form-data">
		@csrf
		<label>Name</label> <br>
		<input type="text" name="name" id="name" class="form-control"><br>
		<label>Fee</label> <br>
		<input type="text" name="fee" id="fee" class="form-control"> <br>
		<label>Duration</label> <br>
		<input type="text" name="duration" id="duration" class="form-control"> <br>
		<label>Place</label> <br>
		<input type="text" name="place" id="place" class="form-control"> <br>
		<label>Information</label> <br>
		<textarea name="info" id="info" class="form-control"></textarea> <br>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection