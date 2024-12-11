@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Add a Course profile
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('courses.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="course_index" class="form-label">Course Number</label>
                    <input type="number" class="form-control" id="course_index" name="course_index">
                </div>
                <div class="mb-3">
                    <label for="course_name" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="course_name" name="course_name">
                </div>
                <div class="mb-3">
                    <label for="course_description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="course_description" name="course_description">
                </div>
                <button type="submit" class="btn btn-primary">Add Course</button>
            </form>
        </div>
    </div>
@endsection