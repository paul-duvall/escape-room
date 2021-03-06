<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function show()
    {
        $company = Company::find(1);
        // dd($company->name);
        return view('company.profile', ['name' => $company->name]);
    }
}
