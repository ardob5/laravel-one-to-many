@extends('layouts.main_layout')

@section('content')

  <div class="main_create">
    <form action=" {{ route('store') }} " method="post">

      @csrf
      @method('POST')

      <label for="firstName">NAME</label>
      <input type="text" name="firstName" value="{{$employee['firstName']}}">

      <label for="lastName">LASTNAME</label>
      <input type="text" name="lastName" value="{{$employee['lastName']}}">

      <label for="dateOfBirth">DATE OF BIRTH</label>
      <input type="text" name="dateOfBirth" value="{{$employee['dateOfBirth']}}">

      <label for="task_id">TASK</label>
      <input type="text" name="task_id" value="{{$employee['task']['name']}}">

      <label for="role">ROLE</label>
      <input type="text" name="role" value="{{$employee['role']}}">


      <input type="submit" name="" value="Edit">

    </form>
  </div>

@endsection
