@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new Projects</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('projects.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama projek: </label>
                        <input type="text" class="form-control" name="project" required>
                    </div>
                    <div class="form-group">
                        <label>Semester:</label>
                        <select name="semester" class="custom-select">
                            <option value="ODD">ODD</option>
                            <option value="EVEN">EVEN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mata kuliah: </label>
                        <select name="mata_kuliah" class="custom-select">
                            <option value="" selected disabled hidden>Choose here</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course['course_code'] }}">{{ $course['course_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi: </label>
                        <input type="text" class="form-control" name="deskripsi" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat Projek</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
