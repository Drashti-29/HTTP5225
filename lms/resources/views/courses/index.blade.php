@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">All courses</h1>
            <a href="{{ route('courses.create') }}">Create New Course</a>
            <a href="{{ route('courses.trashed') }}">Trashes Course</a>
        </div>
    </div>
    <div class="row">
        @foreach ($courses as $course)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$course -> course_name}}
                        </h5>
                        <a href="{{ route ('courses.edit',$course -> id)}}">
                            Edit
                        </a>
                        |
                        <a href="{{ route ('courses.trash',$course -> id)}}">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection