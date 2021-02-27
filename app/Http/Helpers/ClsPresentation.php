<?php

namespace App\Http\Helpers;
use App\Models\CompanyPresentation;


class ClsJobs
{
    public function presentationByCompanyId($companyId)
    {
        $alljobs = CompanyPresentation::all()->where('company_id', $companyId);
        return $alljobs;
    }

    public function presentationById($id){
        $thejob = CompanyPresentation::all()->where('id',$id)->first();
        return $thejob;

    }
}
