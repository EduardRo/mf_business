<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyPressRelease;
use App\Http\Helpers\clsCompany;
use Illuminate\Support\Facades\Auth;


class CompanyPressReleaseController extends Controller
{
    //
    public function index()
    {
        $press = CompanyPressRelease::all();
        return $press;
        //return 'press controller';
    }

    public function show($id)
    {
        $pressrelease = CompanyPressRelease::find($id);
        return $pressrelease;
    }

    public function create()
    {
        $customCompany=new ClsCompany();
        $userId=auth()->id();
        
        $company = $customCompany->retrieveCompanyId($userId);
        $company_id=$company->id;
        $company_name=$company->company_name;
        //return $company;
        return  view('company.CreatePressReleaseCompany', ['company_id' => $company_id, 'company_name'=>$company_name]);
    }

    public function store(Request $request)
    {
        
        // Save the data
        $request->request->add(['enabled'=>false]);
        $input = $request->all();
        CompanyPressRelease::create($input);
        return redirect()->back();
    }
}
