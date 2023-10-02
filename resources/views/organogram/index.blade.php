@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($rootDepartments as $department)
            @include('organogram.department', ['department' => $department])
        @endforeach
    </div>
@endsection
