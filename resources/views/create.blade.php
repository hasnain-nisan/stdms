@extends('master')

@section('title')
  Create Student | Student Management System
@endsection

@section('name')
 Create New Student
@endsection

@section('content')
<form class="form-horizontal" role="form" action="{{ route('store') }}" method="post" enctype="multipart/form-data" data-parsley-validate>

@if ($errors->any())
 <div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
 </div>
@endif

 {{ csrf_field() }}
 <div class="form-group">
   <label class="control-label col-sm-2" for="name">Name:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name='name' placeholder="Enter the name" required>
   </div>
 </div>

 <div class="form-group">
   <label class="control-label col-sm-2" for="reg_id">Registration id:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="reg_id" placeholder="Enter the registration id" required>
   </div>
 </div>

 <div class="form-group">
   <label class="control-label col-sm-2" for="dept_name">Department name:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="dept_name" placeholder="Enter the department name" required>
   </div>
 </div>

 <div class="form-group">
   <label class="control-label col-sm-2" for="info">Info:</label>
   <div class="col-sm-10">
     <textarea class="form-control" name="info" placeholder="Enter some information about the student" rows="8" cols="80"></textarea>
   </div>
 </div>


 <div class="form-group">
   <label class="control-label col-sm-2" for="info">Image:</label>
   <div class="col-sm-10">
    <input type="file"  name="image" >
  </div>
 </div>




<div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-success">Register</button>
   </div>
 </div>
</form>

@endsection
