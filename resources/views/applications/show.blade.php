@extends('layouts.app')

@section('title','application list')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 m-md-auto">
                <div class="card d-flex flex-column align-items-center mt-5">
                    <p>ID: {{ $application['id']}}</p>
                    <h4>{{ $application['agency_name']}}</h4>
                    <p>{{ $application['agency_place']}}</p>
                    <p>Skill richieste : {{ $application['skills']}}</p>
                    <p>{{ $application['extra_info']}}</p>
                    <button class="btn btn-primary mb-2">
                        <a href="{{ route('applications.index')}}" class="text-white">
                            Torna alla HOME
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection