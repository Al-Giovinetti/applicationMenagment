@extends('layouts.app')

@section('title','deleted list')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Lista degli eliminati</h1>
            <div class="col-10 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">nome azienda</th>
                            <th scope="col">luogo di lavoro</th>
                            <th scope="col">competenze</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trashedApplications as $application)
                        <tr>
                            <th scope="row" valign="middle"> {{ $application->id }} </th>
                            <td valign="middle">{{ $application->agency_name }}</td>
                            <td valign="middle">{{ $application->agency_place }}</td>
                            <td valign="middle">{{ $application->skills}}</td>
                            <td>
                                <a href="" class="btn btn-warning">Respown</a>
                                <form action="" method="POST" class="d-inline ms-3">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="btn btn-danger">Cancella x sempre</a>
                                </form>
                            </td>
                        </tr>          
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
    
@endsection