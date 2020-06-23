<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
      $employees = Employee::all();

      return view('home', compact('employees'));
    }

    public function create(){
      $tasks = Task::all();
      return view('create_employee', compact('tasks'));
    }

    public function store(Request $request){
      $validateData = $request -> validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'dateOfBirth' => 'required',
        'role' => 'required',
        'task_id' => 'required'
      ]);

      $employee = new Employee;
      $employee ->  firstName -> $validateData['firstName'];
      $employee ->  lastName -> $validateData['lastName'];
      $employee ->  dateOfBirth -> $validateData['dateOfBirth'];
      $employee ->  role -> $validateData['role'];
      $employee ->  task_id -> $validateData['task_id'];

      $employee -> save();

      return redirect() -> route('home');
    }

    // public function edit($id){
    //   $empoyee =  Employee::findOrFail($id){
    //   $task = Task::all();
    //
    //   return view('edit', compact('employee'));
    //   }
    // }
}
