<?php

namespace App\Http\Controllers;

use App\Http\Helpers\ClsCompany;

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

    public function create()
    {
        $customCompany=new ClsCompany();
        $userId=auth()->id();
        
        $company = $customCompany->retrieveCompanyId($userId);
        $company_id=$company->id;
        $company_name=$company->company_name;
       
   
        // return  $company_name;
        return view('company.presentationsCompanie',['company_id'=>$company_id,'company_name'=>$company_name]);
    }

    public function store(Request $request)
    {
        // Save the data
        $input = $request->all();
        CompanyPresentation::create($input);
        return redirect()->back();
    }

    public function show($id)
    {
    }
}
