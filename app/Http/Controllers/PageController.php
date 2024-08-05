<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function goToIndexPage(){
        return view('applications.index');
    }

    public function goToCreatePage(){
        return view('applications.create');
    }

    public function goToSoftDeletePage(){
        return view('applications.softDelete');
    }
}
