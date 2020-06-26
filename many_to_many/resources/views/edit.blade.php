@extends('layouts.main_layout')

@section('content')
  <div class="showEmployee">
    <h1>Employee: {{ $employee['id'] }} </h1>

    <form action=" {{ route('emp_update', $employee['id']) }} " method="post">
      @csrf
      @method('POST')

      <label for="firstName">First Name</label>
      <input type="text" name="firstName" value="{{ $employee['firstName'] }}">
      <br>

      <label for="lastName">Last Name</label>
      <input type="text" name="lastName" value="{{ $employee['lastName'] }}">
      <br>

      <label for="dateOfBirth">Date of Birth</label>
      <input type="text" name="dateOfBirth" value="{{ $employee['dateOfBirth'] }}">
      <br>

      <label for="role">Role</label>
      <input type="text" name="role" value="{{ $employee['role'] }}">
      <br>

      <label for="locations[]">Locations</label>
      @foreach ($locations as $location)
        <input type="checkbox" name="locations[]" value="{{$location['id']}}"
        @foreach ($employee -> locations as $empLocation)
          @if ($location -> id == $empLocation -> id)
            checked
          @endif
        @endforeach
        > {{ $location['city'] }} <br>
      @endforeach

      <input type="submit" name="submit" value="UPDATE">
    </form>
  </div>
@endsection
