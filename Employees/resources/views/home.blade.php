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
        <th>LOCATION</th>
      </tr>
      @foreach ($employees as $employee)
        <tr>
          <td>   <a href="{{ route('edit', $employee['id']) }}">{{$employee['firstName']}}</a></td>
          <td> {{$employee['lastName']}} </td>
          <td> {{$employee['dateOfBirth']}} </td>
          <td> {{$employee['task']['name']}}</td>
          <td> {{$employee['role']}} </td>
          <td></td>
        </tr>
      @endforeach
    </table>
  </div>


@endsection
