@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Detail Project {{ $project['code'] }}</h1>
            <p><b>Nama project: </b>{{ $project['project'] }}</p>
            <p><b>Semester: </b>{{ $project['semester'] }}</p>
            <p><b>Mata kuliah: </b>{{ $project['mata_kuliah'] }}</p>
            <p><b>Description: </b>{{ $project['description'] }}</p>
        </div>
    </div>
@endsection
