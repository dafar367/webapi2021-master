@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Update Projects</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('projects.update', $project->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama projek: </label>
                        <input type="text" class="form-control" name="project" value="{{ $project->project }}" required>
                    </div>
                    <div class="form-group">
                        <label>Semester:</label>
                        <select name="semester" class="custom-select">
                            <option hidden value="{{ $project->semester }}">
                                {{ $project->semester }}
                            </option>
                            <option value="ODD">ODD</option>
                            <option value="EVEN">EVEN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mata kuliah: </label>
                        <select name="mata_kuliah" class="custom-select">
                            @foreach ($courses as $course)
                                @if ($course['course_code'] == $project['mata_kuliah'])
                                    <option value="{{ $course['course_code'] }}" selected>{{ $course['course_name'] }}
                                    </option>
                                @else
                                    <option value="{{ $course['course_code'] }}">{{ $course['course_name'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi: </label>
                        <input type="text" class="form-control" name="deskripsi" value="{{ $project->description }}"
                            required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat Projek</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
