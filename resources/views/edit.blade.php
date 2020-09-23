@extends('master')

@section('title')
 Edit Student | Student Management System
@endsection

@section('name')
 Edit Exciting Student
@endsection

@section('content')
<form class="form-horizontal" role="form" action="{{ route('update', $student->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
 <div class="form-group">
   <label class="control-label col-sm-2" for="name">Name:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name='name' value="{{$student->name}}">
   </div>
 </div>

 <div class="form-group">
   <label class="control-label col-sm-2" for="reg_id">Registration id:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="reg_id" value="{{$student->reg_id}}">
   </div>
 </div>

 <div class="form-group">
   <label class="control-label col-sm-2" for="dept_name">Department name:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="dept_name" value="{{$student->dept_name}}">
   </div>
 </div>

 <div class="form-group">
   <label class="control-label col-sm-2" for="info">Info:</label>
   <div class="col-sm-10">
     <textarea class="form-control" name="info" rows="8" cols="80">{{$student->info}}</textarea>
   </div>
 </div>

 <div class="form-group">
   <label class="control-label col-sm-2" for="info">Image:</label>
   <div class="col-sm-10">
    <input type="file"  name="image" >
    <img src="{{Storage::url($student->image)}}" alt="" width="150px"> 
  </div>
 </div>

 <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-success">Update</button>
   </div>
 </div>
</form>

@endsection
