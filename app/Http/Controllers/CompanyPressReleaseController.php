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
}
