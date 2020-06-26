<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Location;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {

      $employees = Employee::all();
      return view('index', compact('employees'));
    }

    public function show($id) {

      $employee = Employee::findOrFail($id);
      return view('show', compact('employee'));
    }

    public function edit($id) {
      $employee = Employee::findOrFail($id);
      $locations = Location::all();

      return view('edit', compact('employee', 'locations'));
    }

    public function update(Request $request, $id) {

      $validateData = $request -> validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'dateOfBirth' => 'required',
        'role' => 'required',
        'locations' => 'required'
      ]);

      $employee = Employee::findOrFail($id);

      $employee['firstName'] = $validateData['firstName'];
      $employee['lastName'] = $validateData['lastName'];
      $employee['dateOfBirth'] = $validateData['dateOfBirth'];
      $employee['role'] = $validateData['role'];
      $employee -> save();

      $employee -> locations() -> sync($validateData['locations']);

      return redirect() -> route('emp_home');
    }
}
