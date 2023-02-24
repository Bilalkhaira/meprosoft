<?php

namespace App\Http\Controllers\ProductAndSolution;

use File;
use Exception;
use App\Models\NavMenu;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\ServicePagesData;
use App\Http\Controllers\Controller;

class ProductAndSolutionController extends Controller
{
    public function index($id)
    {
        $services = NavMenu::with('children')->where('name', 'Products & Solutions')->get();

        $pageData = ServicePagesData::with('cards')->where('menu_id', $id)->first();

        if (empty($pageData)) {
            $menu_id = 20;
        } else {
            $menu_id = $pageData->menu_id;
        }

        return view('admin.pages.productAndSolution.index', ['services_lists' => Arr::get($services, '0.children'), 'pageData' => $pageData, 'navbar_id' => $menu_id]);
    }

    public function getServicePage(Request $request)
    {
        $services = NavMenu::with('children')->where('name', 'Products & Solutions')->get();

        $pageData = ServicePagesData::with('cards')->where('menu_id', $request->navbar_id)->first();

        return view('admin.pages.productAndSolution.index', ['services_lists' => Arr::get($services, '0.children'), 'pageData' => $pageData, 'navbar_id' => $request->navbar_id]);
    }

    public function createToSection(Request $request)
    {
        return view('admin.pages.productAndSolution.createToSection', ['parent_id' => $request->nvbar_id]);
    }

    public function storeToSection(Request $request)
    {
        $imgpath = public_path('img/productAndSolution/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        $query = ServicePagesData::create([
            'menu_id' => $request->parent_id,
            'topSection_heading' => $request->heading,
            'topSection_explanation' => $request->explanation,
            'topSection_img' => $fileName
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('productAndSolution.index', $query->menu_id);
    }

    public function editToSection($id)
    {
        $topsectionData = ServicePagesData::find($id);

        return view('admin.pages.productAndSolution.editToSection', ['topsectionData' => $topsectionData, 'update_id' => $id]);
    }

    public function updateToSection(Request $request, $id)
    {

        $updated_row = ServicePagesData::find($id);

        $imgpath = public_path('img/productAndSolution/');

        if (empty($request->img)) {

            $updateimage = $updated_row->topSection_img;
        } else {

            $imagePath =  $imgpath . $updated_row->topSection_img;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }


        $updated_row->update([
            'topSection_heading' => $request->heading,
            'topSection_explanation' => $request->explanation,
            'topSection_img' => $updateimage
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('productAndSolution.index', $updated_row->menu_id);
    }


    public function createExplanationSection($id)
    {
        return view('admin.pages.productAndSolution.createExplanationSection', ['updated_id' => $id]);
    }


    public function storeExplanationSection(Request $request)
    {
        if ($request->img) {
            $imgpath = public_path('img/productAndSolution/');

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
        } else {
            $fileName = '';
        }

        $updated_row = ServicePagesData::find($request->updated_id);

        $updated_row->update([
            'explanationSection_heading' => $request->heading,
            'explanationSection_explanation' => $request->exp,
            'explanationSection_img' => $fileName
        ]);


        toastr()->success('Created Successfully');
        return redirect()->route('productAndSolution.index', $updated_row->menu_id);
    }

    public function editExplanationSection($id)
    {
        $explanationSection = ServicePagesData::find($id);

        return view('admin.pages.productAndSolution.editExplanationSection', ['explanationSection' => $explanationSection, 'update_id' => $id]);
    }

    public function updateExplanationSection(Request $request, $id)
    {

        $updated_row = ServicePagesData::find($id);

        $imgpath = public_path('img/productAndSolution/');

        if (empty($request->img)) {

            $updateimage = $updated_row->explanationSection_img;
        } else {

            $imagePath =  $imgpath . $updated_row->explanationSection_img;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }

        $updated_row->update([
            'explanationSection_heading' => $request->heading,
            'explanationSection_explanation' => $request->exp,
            'explanationSection_img' => $updateimage
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('productAndSolution.index', $updated_row->menu_id);
    }
}
