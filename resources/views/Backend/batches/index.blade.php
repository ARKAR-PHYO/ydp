@extends('backend_template')
@section('content')
<a href="{{route('batch.create')}}" class="btn btn-primary float-right">Add New Batch</a>

<h1> Batch List </h1>
<div>
<table class="table">
	<thead>
		<th>No.</th>
		<th>Batch Name</th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Course Name</th>
		<th>Action</th>
	</thead>
	<tbody>
		@php
		$i=1
		@endphp
		@foreach ($batches as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->start_date}}</td>
			<td>{{$row->end_date}}</td>
			<td>{{$row->Course->name}}</td>
			<td>
			<a href="{{route('batch.update',$row->id)}}" class="btn btn-warning">Edit</a>

			<a href="{{route('batch.show',$row->id)}}" class="btn btn-success">Detail</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection