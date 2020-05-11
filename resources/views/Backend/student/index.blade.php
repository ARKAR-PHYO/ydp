@extends('backend_template')
@section('content')
<a href="{{route('student.create')}}" class="btn btn-primary float-right">Add New Student</a>

<h1> Batch List </h1>
<div>
<table class="table">
	<thead>
		<th>No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Address</th>
		<th>Batch Name</th>

		<th>Action</th>
	</thead>
	<tbody>
		@php
		$i=1
		@endphp
		@foreach ($students as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->email}}</td>
			<td>{{$row->ph_no}}</td>
			<td>{{$row->address}}</td>
			<td>{{$row->Batch->name}}</td>
			<td>
			<a href="{{route('student.update',$row->id)}}" class="btn btn-warning">Edit</a>

			<a href="{{route('student.show',$row->id)}}" class="btn btn-success">Detail</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection