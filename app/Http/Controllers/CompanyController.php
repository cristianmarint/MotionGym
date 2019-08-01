<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-08-01 10:50:30
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-01 13:10:11
 * @ Description:
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class CompanyController extends Controller
{
    public function welcome()
    {
        return view('company.welcome');
    }

    public function aboutus()
    {
        return view('company.aboutus');
    }

    public function services()
    {
        $services = Service::all();
        return view('company.services',compact('services'));
    }

    public function policy()
    {
        return view('company.policy');
    }

    public function conditions()
    {
        return view('company.conditions');
    }
}
