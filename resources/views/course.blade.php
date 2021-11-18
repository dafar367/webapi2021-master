@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Courses</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('courses.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create course</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Course Code</th>
                <th scope="col">Course Name</th>
                <th scope="col">Lecturer</th>
                <th scope="col">SKS</th>
                <th scope="col">Description</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($courses as $course)
                <tr>
                    <th scope="row">{{ $index }}</th>
                    @php $index++ @endphp
                    <td>{{ $course['course_code'] }}</td>
                    <td>{{ $course['course_name'] }}</td>
                    <td>{{ $course['lecturer'] }}</td>
                    <td>{{ $course['number_sks'] }}</td>
                    <td>{{ $course['description'] }}</td>
                    <td class="text-center">
                        <form action="{{ route('courses.destroy',$course->course_code) }}" method="POST">   
                            <a class="btn btn-info" href="{{ route('courses.show', $course->course_code) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('courses.edit', $course->course_code) }}">Edit</a>
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection