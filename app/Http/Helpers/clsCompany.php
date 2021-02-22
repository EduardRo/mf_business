<?php
namespace App\Http\Helpers;
class clsCompany{
    

    public function make_custom_avatar( $avatar=null){
        $default_avatar='avatar.png';
        // do your operation here
        return $avatar . $default_avatar;
    }

    public function retrieveCompanyId($userId){

        return 33;
        $companies = Company::all()->find($userId);
        
        
        return $companies;

        
    }
}
