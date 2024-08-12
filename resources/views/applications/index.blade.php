@extends('layouts.app')

@section('title','application list')

@php

    function convertData($data){
        $createDate = new DateTime($data);
        $strip = $createDate->format('Y-m-d');
        return $strip;
    }

@endphp

@section('content')
<div class="container">
    <h2>Lista completa delle tue candidature</h2>
    <div class="row">
        @if (session('delete'))
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    La candidatura con id {{ SESSION('delete') }} è stata rimossa con successo
                </div> 
            </div>
        @elseif(session('finalDelete'))
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    La candidatura con id {{ SESSION('finalDelete') }} è stata rimossa definitivamente
                </div> 
            </div>
        @endif
        @foreach ($applications as $application)
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="card p-3 pb-5 w-100 my-2">
                    <a href="{{ route('applications.show',$application['id'])}}" class="text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>{{ $application['agency_name'] }}</h5>
                            <p>{{ $application['agency_place'] }}</p>
                        </div>
                        <p>Competenze : {{ $application['skills']}} </p>
                        <p class="pb-4"> {{ $application['extra_info'] }}</p>
                        <div class="application-bottombar d-flex justify-content-between align-items-center">
                            <p class="text-center m-0"> Data candidatura: {{ convertData($application['created_at']) }}</p>
                            <form action="{{ route('applications.destroy',$application->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
@endsection
    