<?php

namespace App\Http\Controllers\Admin\Services;

use App\Models\NavMenu;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Ui\Presets\React;

class ServicesController extends Controller
{
    public function index()
    {
        $services = NavMenu::with('children')->where('name', 'Services')->get();

        return view('admin.pages.services.index', ['services_lists' => Arr::get($services, '0.children')]);
    }

    public function createExplanationSection()
    {
        return view('admin.pages.services.createExplanationSection');
    }

    public function createFeatureSection()
    {
        return view('admin.pages.services.createFeatureSection');
    }

    public function createFeatureSectionCard()
    {
        return view('admin.pages.services.createFeatureSectionCard');
    }

    public function createToSection()
    {
        return view('admin.pages.services.createToSection');
    }

    public function editExplanationSection($id)
    {
        return view('admin.pages.services.editExplanationSection');
    }

    public function editFeatureSection($id)
    {
        return view('admin.pages.services.editFeatureSection');
    }

    public function editFeatureSectionCard($id)
    {
        return view('admin.pages.services.editFeatureSectionCard');
    }

    public function editToSection($id)
    {
        return view('admin.pages.services.editToSection');
    }

    public function storeToSection(Request $request)
    {
        // $imgpath = public_path('img/services/');

        // $destinationPath = $imgpath;
        // $file = $request->img;
        // $fileName = time() . '.' . $file->clientExtension();
        // $file->move($destinationPath, $fileName);

        $input = [
            'heading' => $request->heading,
            'explanation' => $request->explanation,
            'img' => 'asd',
        ];

        $a = json_encode($input);

        NavMenu::create([
            'menu_id' => 1,
            'top_section' => $a
        ]);


        toastr()->success('Created Successfully');
        return redirect()->route('service.index');
    }
}
