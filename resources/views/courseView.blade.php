@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Detail Course {{ $course['course_code'] }}</h1>
            <p><b>Nama course: </b>{{ $course['course_name'] }}</p>
            <p><b>Nama dosen: </b>{{ $course['lecturer'] }}</p>
            <p><b>Jumlah SKS: </b>{{ $course['number_sks'] }}</p>
            <p><b>Description: </b>{{ $course['description'] }}</p>

            <b>List Project</b>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                    @foreach ($course->projects as $project)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            @php $index++ @endphp
                            <td>{{ $project['code'] }}</td>
                            <td>{{ $project['project'] }}</td>
                            <td>{{ $project['semester'] }}</td>
                            <td>{{ $project['description'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- <VirtualHost *:80>
    #ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "C:/xampp/htdocs/"
    ServerName localhost
    #ServerAlias www.dummy-host.example.com
    #ErrorLog "logs/dummy-host.example.com-error.log"
    #CustomLog "logs/dummy-host.example.com-access.log" common
</VirtualHost> --}}
