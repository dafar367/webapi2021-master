@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Projects</h1>

            <div class="text-right">
                <a class="btn btn-success pull-right" href="{{ route('projects.create') }}">
                    <i class="fas fa-arrow-alt-circle-right"></i> Create project</a>
            </div>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Course</th>
                        <th scope="col">Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            @php $index++ @endphp
                            <td>{{ $project['code'] }}</td>
                            <td>{{ $project['project'] }}</td>
                            <td>{{ $project['semester'] }}</td>
                            {{-- <td>{{ $project->mata_kuliah }}</td> --}}
                            <td>
                                <a href="{{ route('courses.show', $project->course->course_code) }}">
                                    {{ $project->course->course_name }}
                                </a>
                            </td>
                            <td>{{ $project['description'] }}</td>
                            <td class="text-center">
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('projects.show', $project->code) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">Edit</a>
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
    </div>
@endsection
