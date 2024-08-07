@extends('layouts.app')

@section('title','new application')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Aggiungi una nuova candidatura</h1>
            <div class="col-8">
                <form action="{{ route('applications.store')}}" method="POST" class="card p-3 mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="app-agency_name" class="form-label">Inserisci il nome dell' azienda</label>
                        <input type="text" name="agency_name" id="app-agency_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="app-agency_place" class="form-label">Inserisci dove si trova</label>
                        <input type="text" name="agency_place" id="app-agency_place" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="app-skills" class="form-label">Inserisci le skills richieste</label>
                        <input type="text" name="skills" id="app-skills" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="app-extra_info" class="form-label">Salva informazioni extra</label>
                        <textarea name="extra_info" id="app-extra_info" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit"  class="btn btn-primary me-3">Crea record</button>
                        <button type="reset" class="btn btn-warning ms-3">Svuta form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    
@endsection
    