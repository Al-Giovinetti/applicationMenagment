<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jobApplication;

class PageController extends Controller
{
    public function goToIndexPage(){
        $applications = jobApplication::orderBy('id','desc')->get();

        return view('applications.index', compact('applications'));
    }

    public function goToCreatePage(){
        return view('applications.create');
    }

    public function goToSoftDeletePage(){
        return view('applications.softDelete');
    }
}
