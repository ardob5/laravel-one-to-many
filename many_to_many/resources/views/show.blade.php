@extends('layouts.main_layout')

@section('content')
  <div class="showEmployee">
      <ul>
        <li>
          <h1>Employee: {{ $employee['id'] }} </h1>
        </li>
        <li><b>FIRST NAME :</b> {{ $employee['firstName']}} </li>
        <li><b>LAST NAME :</b> {{ $employee['lastName']}} </li>
        <li><b>DATE OF BIRTH :</b> {{ $employee['dateOfBirth']}} </li>
        <li><b>ROLE :</b> {{ $employee['role']}} </li>
        <li><b>
            @if (count($employee -> tasks))
              TASKS :
              @else
                NO TASKS
            @endif
            </b>
              <ul>
                @foreach ($employee -> tasks as $task)
                  <li>
                    {{ $task['name'] }}
                  </li>
                @endforeach
              </ul>
        </li>
        <li><b>
            @if (count($employee -> locations))
              LOCATIONS :
              @else
                NO LOCATION
            @endif
            </b>
              <ul>
                @foreach ($employee -> locations as $location)
                  <li>
                    {{ $location['street'] }} - {{ $location['city'] }} - {{ $location['state'] }}
                  </li>
                @endforeach
              </ul>
        </li>
      </ul>
      <a href="{{ route('emp_edit', $employee['id']) }}">EDIT</a>
  </div>
@endsection
