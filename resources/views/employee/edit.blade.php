@extends('layout')
@section('page-content')
<div class="col-md-8 container">
<form class="container " method="POST" action="{{route('employee.update',$employee->id)}} ">

@csrf
@method('PUT')
  <div class="mb-2">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$employee->name}}">
  </div>

  <div class="mb-2">
    <label for="job_title" class="form-label">Job_title</label>
    <input type="text" class="form-control" name="job_title" value="{{$employee->job_title}}">
  </div>

  <div class="mb-2">
    <label for="joining_date" class="form-label">Joinining_date</label>
    <input type="date" class="form-control" name="joining_date" value="{{$employee->joining_date}}">
  </div>

  <div class="mb-2">
    <label for="salary" class="form-label">salary</label>
    <input type="number" class="form-control" name="salary" value="{{$employee->salary}}">
  </div>

  <div class="mb-2">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="{{$employee->email}}">
  </div>

  <div class="mb-2">
    <label for="mobile_no" class="form-label">Mobile_no</label>
    <input type="text" class="form-control" name="mobile_no" value="{{$employee->mobile_no}}">
  </div>

  <div class="mb-2">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="{{$employee->address}}">
  </div>

  <div class="mb-2">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary ">Update</button>
    </div>
  </div>
</form> 
</div>

@endsection