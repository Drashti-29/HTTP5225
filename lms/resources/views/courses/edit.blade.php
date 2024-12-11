@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Edit Course profile
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('courses.update', $course -> id) }}" method="POST">
                @method("PUT");
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="course_index" class="form-label">Course Number</label>
                    <input type="text" class="form-control" id="course_index" name="course_index" value="{{$course -> course_index}}">
                </div>
                <div class="mb-3">
                    <label for="course_name" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="course_name" name="course_name" value="{{$course -> course_name}}">
                </div>
                <div class="mb-3">
                    <label for="course_description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="course_description" name="course_description" value="{{$course -> course_description}}">
                </div>
                <button type="submit" class="btn btn-primary">Update Course</button>
            </form>
        </div>
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

h1, h2 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.col {
    flex: 1;
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Form Styles */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-label {
    font-weight: bold;
    color: #555;
    margin-bottom: 5px;
}

.form-control {
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.2s;
}

.form-control:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

button {
    padding: 10px 15px;
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
}

button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .col {
        padding: 15px;
    }
}

@media (max-width: 480px) {
    .col {
        padding: 10px;
    }
}
</style>