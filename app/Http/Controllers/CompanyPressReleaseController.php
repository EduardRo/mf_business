<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyPressRelease;

class CompanyPressReleaseController extends Controller
{
    //
    public function index()
    {
        $press = CompanyPressRelease::all();
        return $press;
    }

    public function show($id)
    {
        $pressrelease = CompanyPressRelease::find($id);
        return $pressrelease;
    }

    public function create(){

        


    }

    public function store(){

    }
}
