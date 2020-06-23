@extends('layouts.main_layout')

@section('content')

  <div class="main_create">
    <form action=" {{ route('store') }} " method="post">

      @csrf
      @method('POST')

      <label for="firstName">NAME</label>
      <input type="text" name="firstName" value="">

      <label for="lastName">LASTNAME</label>
      <input type="text" name="lastName" value="">

      <label for="dateOfBirth">DATE OF BIRTH</label>
      <input type="text" name="dateOfBirth" value="">

      <label for="task_id">TASK</label>
      <input type="text" name="task_id" value="">

      <label for="role">ROLE</label>
      <input type="text" name="role" value="">
      
      <input type="submit" name="" value="CREATE">

    </form>
  </div>

@endsection
