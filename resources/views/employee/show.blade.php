@extends('layout')
@section('page-content')
<table class="table table-striped table-bordered">
    <tr>
        <th>Heading</th>
        <th>Values</th>
    </tr>
    <tr><td>ID</td><td>{{$employee->id}}</td></tr>
    <tr><td>Name</td><td>{{$employee->name}}</td></tr>
    <tr><td>Job_title</td><td>{{$employee->job_title}}</td></tr>
    <tr><td>Joining_date</td><td>{{$employee->joining_date}}</td></tr>
    <tr><td>Salary</td><td>{{$employee->salary}}</td></tr>
    <tr><td>Email</td><td>{{$employee->email}}</td></tr>
    <tr><td>Mobile_no</td><td>{{$employee->mobile_no}}</td></tr>
    
</table>
@endsection