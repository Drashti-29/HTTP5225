@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Trashed courses</h1>
            <hr>
            <a href="{{ route('courses.index') }}">Back to the List</a>
            <hr>
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
                        <a href="{{  route('courses.restore', $course -> id) }}">Restore</a>
                <a href="{{  route('courses.destroy', $course -> id) }}">Delete Permanently</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
    font-size: 2.5rem;
}

hr {
    border: 0;
    border-top: 1px solid #ddd;
    margin: 20px 0;
}

a {
    color: #007bff;
    text-decoration: none;
    font-size: 1.1rem;
    margin-right: 15px;
}

a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Layout for course items */
.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.col-md-4 {
    flex: 1;
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Card Styling */
.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: box-shadow 0.3s ease;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 15px;
}

/* Links inside card */
.card-body a {
    color: #007bff;
    text-decoration: none;
    font-size: 1rem;
    margin-right: 10px;
}

.card-body a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .row {
        gap: 15px;
    }

    .col-md-4 {
        max-width: 100%;
        padding: 15px;
    }

    h1 {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .col-md-4 {
        padding: 10px;
    }

    h1 {
        font-size: 1.75rem;
    }
}
</style>