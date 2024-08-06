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

    public function show(){
        
    }

    public function create(){
        return view('applications.create');
    }

    public function softDelete(){
        return view('applications.softDelete');
    }
}
