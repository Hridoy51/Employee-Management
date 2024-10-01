@extends('layout')
@section('page-content')
<div class="col-md-8 container">
<form class="container " method="POST" action="{{route('employee.store')}} ">
@csrf
  <div class="mb-2">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value={{old("name")}}>
  </div>

  <div class="mb-2">
    <label for="job_title" class="form-label">Job_title</label>
    <input type="text" class="form-control" name="job_title" value={{old("job_title")}}>
  </div>

  <div class="mb-2">
    <label for="joining_date" class="form-label">Joinining_date</label>
    <input type="date" class="form-control" name="joining_date" value={{old("joining_date")}}>
  </div>

  <div class="mb-2">
    <label for="salary" class="form-label">salary</label>
    <input type="number" class="form-control" name="salary" value={{old("salary")}}>
  </div>

  <div class="mb-2">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value={{old("email")}}>
  </div>

  <div class="mb-2">
    <label for="mobile_no" class="form-label">Mobile_no</label>
    <input type="text" class="form-control" name="mobile_no" value={{old("mobile_no")}}>
  </div>

  <div class="mb-2">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value={{old("address")}}>
  </div>

  <div class="mb-2">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
  </div>
</form> 
</div>

@endsection