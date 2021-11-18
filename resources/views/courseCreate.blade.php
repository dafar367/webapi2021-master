@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new Course</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('courses.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Kode course: </label>
                        <input type="text" class="form-control" name="course_code" required>
                    </div>
                    <div class="form-group">
                        <label>Nama course: </label>
                        <input type="text" class="form-control" name="course_name" required>
                    </div>
                    <div class="form-group">
                        <label>Nama dosen: </label>
                        <input type="text" class="form-control" name="lecturer" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah SKS: </label>
                        <input type="text" class="form-control" name="number_sks" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi: </label>
                        <input type="text" class="form-control" name="deskripsi" required>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat Course</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
