<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Company;
use App\Models\Brand;
use Illuminate\Routing\Controller as BaseController;
use View;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $company_info = Company::first();
        View::share('company_info', $company_info);

        $all_brand = Brand::all();
        View::share('all_brand', $all_brand);
    }
}
