@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <a href="{{ route('courses.index') }}">Back to the List</a>
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
<style>
    /* General layout */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Form styling */
form {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Heading styling */
h2.display-2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 20px;
}

/* Label styling */
.form-label {
    font-size: 1.1rem;
    color: #555;
}

/* Input fields styling */
.form-control {
    background-color: #f0f0f0;
    border: 1px solid #ddd;
    padding: 12px;
    border-radius: 4px;
    font-size: 1rem;
    width: 100%;
    margin-top: 5px;
    margin-bottom: 15px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
}

/* Button styling */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
    padding: 12px 24px;
    font-size: 1rem;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }

    .form-control {
        font-size: 0.9rem;
    }

    .btn-primary {
        width: 100%;
    }
}
</style>