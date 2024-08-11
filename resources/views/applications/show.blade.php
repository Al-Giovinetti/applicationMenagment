@extends('layouts.app')

@section('title','application list')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 m-md-auto">
                <div class="card d-flex flex-column align-items-center mt-5 p-3">
                    <p>ID: {{ $application['id']}}</p>
                    <h4>{{ $application['agency_name']}}</h4>
                    <p>{{ $application['agency_place']}}</p>
                    <p>Skill richieste : {{ $application['skills']}}</p>
                    <p>{{ $application['extra_info']}}</p>
                    <div class="commands">
                        <a href="{{ route('applications.index')}}" class="btn btn-secondary ">
                            Torna alla HOME
                        </a>
                        <a href="{{ route('applications.edit', $application['id'])}}" class="btn btn-warning">
                            Modifica le informazioni
                        </a>
                    </div>
                </div>
            </div>
            @if ( SESSION('update'))
                <div class="col-7 m-auto mt-3">
                    <div class="alert alert-primary" role="alert">
                        La candidatura con id {{ SESSION('update')}} è stata modificata con successo
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection