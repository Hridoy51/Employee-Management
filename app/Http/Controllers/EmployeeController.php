<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'salary' => 'required|min:0',
            'email' => 'nullable|email|max:255|unique:employees,email',
            'mobile_no' => 'required|string|max:15', // You can adjust max length based on format
            'address' => 'required|string',
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'job_title.required' => 'Please provide the job title.',
            'joining_date.required' => 'The joining date is required.',
            'joining_date.date' => 'The joining date must be a valid date.',
            'salary.required' => 'The salary field is required.',
            'salary.numeric' => 'The salary must be a number.',
            'salary.min' => 'The salary must be a positive value.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already in use.',
            'mobile_no.required' => 'The mobile number is required.',
            'address.required' => 'The address field is required.',
        ];

        $request->validate($rules, $messages);

        // If validation passes, store the employee
        Employee::create($request->all());

        // Redirect or return a response
        return redirect()->route('employee.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'salary' => 'required|min:0',
            'email' => 'nullable|email|max:255|unique:employees,email,' . $id,
            'mobile_no' => 'required|string|max:15', // You can adjust max length based on format
            'address' => 'required|string',
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'job_title.required' => 'Please provide the job title.',
            'joining_date.required' => 'The joining date is required.',
            'joining_date.date' => 'The joining date must be a valid date.',
            'salary.required' => 'The salary field is required.',
            'salary.numeric' => 'The salary must be a number.',
            'salary.min' => 'The salary must be a positive value.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already in use.',
            'mobile_no.required' => 'The mobile number is required.',
            'address.required' => 'The address field is required.',
        ];

        $request->validate($rules, $messages);
        $employee = Employee::find($id);

        // If validation passes, store the employee
        $employee->update($request->all());

        // Redirect or return a response
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');

    }
    public function search(Request $request)
    {
        $key = $request->input('search');
        $employees = Employee::where('name', 'like', "%" . $key . "%")->paginate(5);
        return view('employee.index')->with('employees', $employees);

    }
}
