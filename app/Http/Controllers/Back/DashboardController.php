<?php

namespace App\Http\Controllers\Back;

use Auth;
use File;
use App\Models\Back\Company;
use App\Models\Back\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Companies Listing';
        $companies = Company::count();
        $employes = Employe::count();
        return view('back.dashboard.index', compact('title', 'companies','employes'));
    }
}
