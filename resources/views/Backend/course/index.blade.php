@extends('backend_template')
@section('content')
<a href="{{route('course.create')}}" class="btn btn-primary float-right">Add New Course</a>

<h1> Course List </h1>
<div>
<table class="table">
	<thead>
		<th>No.</th>
		<th>Name</th>
		<th>Fee</th>
		<th>Duration</th>
		<th>Place</th>
		<th>Action</th>
	</thead>
	<tbody>
		@php
		$i=1
		@endphp
		@foreach ($courses as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->fee}}</td>
			<td>{{$row->duration}}</td>
			<td>{{$row->place}}</td>
			<td>
			<a href="{{route('course.update',$row->id)}}" class="btn btn-warning">Edit</a>

			<a href="{{route('course.show',$row->id)}}" class="btn btn-success">Detail</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection