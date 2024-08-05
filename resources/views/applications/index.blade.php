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
        @foreach ($applications as $application)
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="card p-3 pb-5 w-100 my-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>{{ $application['agency_name'] }}</h5>
                        <p>{{ $application['agency_place'] }}</p>
                    </div>
                    <p>Competenze : {{ $application['skills']}} </p>
                    <p> {{ $application['extra_info'] }}</p>
                    <p class="text-center application-date"> Dati di applicazione : {{ convertData($application['created_at']) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
@endsection
    