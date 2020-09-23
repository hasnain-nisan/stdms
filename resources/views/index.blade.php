@extends('master')

@section('title')
  Student Management System
@endsection

@section('name')
 All Students
@endsection

@section('content')
<table class="table table-responsive table-hover">
<tr>
<td>Serial Number</td>
<td>Name</td>
<td>Registration_id</td>
<td>Department_name</td>
<td>Info</td>
<td>Image</td>
@if(Auth::check())
<td>Action</td>
@endif
</tr>
@php $i = 0; @endphp
@foreach ($students  as $student)
@php $i++ @endphp
<tr>
<td>{{ $i }}</td>
<td>{{ $student->name }}</td>
<td>{{ $student->reg_id }}</td>
<td>{{ $student->dept_name }}</td>
<td>{{ $student->info }}</td>
<td><img src="{{Storage::url($student->image)}}" alt="" width="150px"></td>
<td>
  @if (Auth::check())
<a href="{{route('edit', $student->id)}}" class="btn btn-success">Edit</a>
<form class="form-inline" action="{{route('delete', $student->id)}}" method="post">
 {{ csrf_field() }}
 <input type="submit" class="btn btn-danger" name="delete" value="delete">
</form>
 @endif
</td>
</tr>
@endforeach
</table>

@endsection
