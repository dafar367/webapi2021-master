@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Update Course</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('courses.update', $course->course_code) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Kode course: </label>
                        <input type="text" class="form-control" name="course_code" value="{{ $course->course_code }}" required>
                    </div>
                    <div class="form-group">
                        <label>Nama course: </label>
                        <input type="text" class="form-control" name="course_name" value="{{ $course->course_name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Nama dosen: </label>
                        <input type="text" class="form-control" name="lecturer" value="{{ $course->lecturer }}" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah SKS: </label>
                        <input type="text" class="form-control" name="number_sks" value="{{ $course->number_sks }}" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi: </label>
                        <input type="text" class="form-control" name="deskripsi" value="{{ $course->description }}" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Ubah Course</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
