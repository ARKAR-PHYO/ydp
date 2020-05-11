@extends('backend_template')
@section('content')
<div class="col-8">
	<h1>Add New Batch</h1>
	<form method="POST" action="{{route('batch.store')}}" enctype="multipart/form-data">
		@csrf
		<label>Name</label> <br>
		<input type="text" name="name" id="name" class="form-control"><br>
		<label>Start Date</label> <br>
		<input type="date" name="start_date" id="start_date" class="form-control"> <br>
		<label>End Date</label> <br>
		<input type="date" name="end_date" id="end_date" class="form-control"> <br>
		<label>Course Name</label> <br>
		<select id="course_id" name="course_id" class="form-control">
			@foreach ($courses as $row)
			<option value="{{$row->id}}">{{$row->name}}</option>
			@endforeach
		</select> <br>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection