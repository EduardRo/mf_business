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

        $companies = CompanyPresentation::All();
        return $companies;
    }

    public function create()
    {

        // aici trebuie sa fie o function de verificare
        // daca exista deja atunci doar se editeaza
        $customCompany = new ClsCompany();
        $userId = auth()->id();

        $company = $customCompany->retrieveCompanyId($userId);
        $company_id = $company->id;
        $company_name = $company->company_name;


        // return  $company_name;
        return view('company.createPresentationsCompany', ['user_id' => $userId, 'company_id' => $company_id, 'company_name' => $company_name]);
    }

    public function store(Request $request)
    {
        // Save the data
        $request->request->add(['enabled' => false]);
        $input = $request->all();
        CompanyPresentation::create($input);
        return redirect()->back();
    }

    public function show($id)
    {
    }

    public function edit($id){
        // daca se incearca crearea si exista atunci se editeaza si se cheama functia update

    }

    public function update(CompanyPresentation $presentation){

    }
}
