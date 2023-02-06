<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function homeSetting()
    {
        return view('admin.pages.homeSetting');
    }

    public function updateSatisfiedSection(Request $request)
    {
        dd($request->all());
    }

    public function createNewSlide()
    {
        return view('admin.pages.home.addNewSlide');
    }

    public function createNewProduct()
    {
        return view('admin.pages.home.createNewProduct');
    }

    public function createNewService()
    {
        return view('admin.pages.home.createNewService');
    }

    public function editMainSection()
    {
        return view('admin.pages.home.editMainSection');
    }

    public function editProductMainSection()
    {
        return view('admin.pages.home.editProductMainSection');
    }

    public function editStisfiedCustomersSetting()
    {
        return view('admin.pages.home.editStisfiedCustomersSetting');
    }

    public function editBuildingEfficiencySection()
    {
        return view('admin.pages.home.editBuildingEfficiencySection');
    }

    public function editPercentageSection()
    {
        return view('admin.pages.home.editPercentageSection');
    }

    public function editQuestonsSection()
    {
        return view('admin.pages.home.editQuestonsSection');
    }
}
