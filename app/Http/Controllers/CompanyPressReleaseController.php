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
    }

    public function show($id)
    {
        $pressrelease = CompanyPressRelease::find($id);
        return $pressrelease;
    }

    public function create()
    {
        $userId = Auth::user()->id;
        $company = new clsCompany();
        $company_id = $company->retrieveCompanyId($userId);

        return  view('company.CreatePressReleaseCompany', ['company_id' => $company_id]);
    }

    public function store(Request $request)
    {
        
        return $request->company_id;
    }
}
