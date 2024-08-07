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

    public function softDelete(){
        return view('applications.softDelete');
    }
}
