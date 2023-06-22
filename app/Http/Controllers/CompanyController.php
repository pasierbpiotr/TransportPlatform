<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showPage() {
        $companies = Company::all();

        return view('welcome-page', ['companies'=>$companies]);
    }
}
