<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    //

    public function index() {
        $companies = Company::with('products')->get();

        return view('companies.index', [
            'companies' => $companies,
        ]);
    }
}
