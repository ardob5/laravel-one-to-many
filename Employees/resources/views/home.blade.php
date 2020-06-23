@extends('layouts.main_layout')

@section('content')

  <div class="main_content">
    <table>
      <tr>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>DATE OF BIRTH</th>
        <th>TASK</th>
        <th>ROLE</th>
      </tr>
      @foreach ($employees as $employee)
        <tr>
          <td> {{$employee['firstName']}} </td>
          <td> {{$employee['lastName']}} </td>
          <td> {{$employee['dateOfBirth']}} </td>
          <td> {{$employee['task']['name']}}</td>
          <td> {{$employee['role']}} </td>
        </tr>
      @endforeach
    </table>
  </div>

@endsection
