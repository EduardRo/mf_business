<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Helpers\clsCompany;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $customAvatar=new clsCompany();
        $defaultAvatar = $customAvatar->make_custom_avatar();
        $companies = Company::All();
        return view('layout.show_companies', ['companies' => $companies, 'com'=>$defaultAvatar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Aduce forma in care se salveaza datele companiei
        //return 'controller';


        
        
        $currentUser = auth()->id();
        return view('company.dateCompanie', ['currentUser'=>$currentUser]);
    }

    public function introducereDateCompanie()
    {
        // Aduce forma in care se salveaza datele companiei
        //return 'controller';
        return view('company.dateCompanie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save the data
        $input = $request->all();
        Company::create($input);
        return redirect()->back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return $company;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
