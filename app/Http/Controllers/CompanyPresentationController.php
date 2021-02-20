<?php

namespace App\Http\Controllers;

use App\Models\CompanyPresentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyPresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $name = Auth::user()->name;
        $companies = CompanyPresentation::All();
        return view('company.presentationsCompanie', ['companies' => $companies, 'userid' => $userid, 'name' => $name]);
    }

    public function create(){

    }

    public function store(){
        
    }
}
