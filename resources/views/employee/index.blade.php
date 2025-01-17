@extends('layout')
@section('page-content')
<p class="text-end"><a text="end" class="btn btn-primary" href="{{route('employee.create')}}">New Employee</a></p>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Job_title</th>
        <th>Joining_date</th>
        <th>Salary</th>
        <th>Email</th>
        <th>Mobile_no</th>
        <th>Details</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->job_title}}</td>
            <td>{{$employee->joining_date}}</td>
            <td>{{$employee->salary}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->mobile_no}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('employee.show',$employee->id)}}">Details</a>
            </td>
            <td>
                <form method="GET" action="{{route('employee.edit', $employee->id)}}">
                    @csrf
                    <input class="btn btn-primary" type="submit" name="update" value="Update">
                </form>
            </td>

            <td>
                <form method="POST" action="{{route('employee.delete', $employee->id)}}" onsubmit="return confirm('Sure?')">
                    @csrf
                    @method('Delete')
                    <input class="btn btn-danger" type="submit" name="update" value="Delete">
                </form>
            </td>

        </tr>

    @endforeach
</table>
{{$employees->links()}}
@endsection