<?php

namespace App\Http\Helpers;

use App\Models\Company;

class ClsCompany
{


    public function make_custom_avatar($avatar = null)
    {
        $default_avatar = 'avatar.png';
        // do your operation here
        return $avatar . $default_avatar;
    }

    public function retrieveCompanyId($userId)
    {


        $company = Company::all()->where('user_id',$userId)->first();


        return $company;

        //return 'sunt in clasa clsCompanies in retrieveCompanyId';
    }
}
?>