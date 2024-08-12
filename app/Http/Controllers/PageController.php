<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jobApplication;


class PageController extends Controller
{
    public function index(){
        $applications = jobApplication::orderBy('id','desc')->get();
        return view('applications.index', compact('applications'));
    }

    public function show($id){
        $application = jobApplication::findOrFail($id);
        return  view('applications.show',compact('application'));
    }

    public function create(){
        return view('applications.create');
    }

    public function store(Request $request){
        $formData = $request->all();

        $newApplication = new jobApplication();
        $newApplication->agency_name = $formData['agency_name'];
        $newApplication->agency_place = $formData['agency_place'];
        $newApplication->skills = $formData['skills'];
        $newApplication->extra_info = $formData['extra_info'];

        $newApplication->save();

        return redirect()->route('applications.show',$newApplication->id);
    }

    public function edit(Int $id){
        $applicationToModify = jobApplication::findOrFail($id);
        return view('applications.edit', compact('applicationToModify'));
    }

    public function update(Request $request, Int $id){
        $application = jobApplication::findOrFail($id);
        $data = $request->all();

        $application->agency_name = $data['agency_name'];
        $application->agency_place = $data['agency_place'];
        $application->skills = $data['skills'];
        $application->extra_info = $data['extra_info'];
        $application->save();

        return redirect()->route('applications.show',$application->id)->with('update',$application->id);
    }

    public function destroy(int $id){
        $application = jobApplication::findOrFail($id);
        $application->delete();
        return redirect()->route('applications.index')->with('delete',$id);
    }

    public function softDelete(){
        $trashedApplications= jobApplication::onlyTrashed()->get();
        return view('applications.softDelete',compact('trashedApplications'));
    }

    public function respawn(int $id){
        $application = jobApplication::onlyTrashed()->findOrFAil($id);
        $application->restore();
        return redirect()->route('applications.show',$application)->with('respawn',$application->id);
    }

    public function finalDelete(Int $id){
        $application = jobApplication::onlyTrashed()->findOrFAil($id);
        $applicationID = $application->id;
        $application->forceDelete();
        return redirect()->route('applications.index')->with('finalDelete',$applicationID);
    }
}
