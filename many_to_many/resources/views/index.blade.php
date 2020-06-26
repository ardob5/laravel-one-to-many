@extends('layouts.main_layout')

@section('content')
  <div class="main_content">
    <h1>Employees</h1>
    <table>
      <tr>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>DATE OF BIRTH</th>
        <th>ROLE</th>
      </tr>
      @foreach ($employees as $employee)
        <tr>
          <td>
               <a href="{{ route('emp_show', $employee['id']) }}">
                 {{$employee['firstName']}}</a>
          </td>
          <td> {{$employee['lastName']}} </td>
          <td> {{$employee['dateOfBirth']}} </td>
          <td> {{$employee['role']}} </td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
