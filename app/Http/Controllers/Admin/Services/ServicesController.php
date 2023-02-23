<?php

namespace App\Http\Controllers\Admin\Services;

use File;
use Exception;
use App\Models\NavMenu;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\PagesCardData;
use App\Models\ServicePagesData;
use App\Http\Controllers\Controller;
use Laravel\Ui\Presets\React;

class ServicesController extends Controller
{
    public function index($id)
    {
        $services = NavMenu::with('children')->where('name', 'Services')->get();

        $pageData = ServicePagesData::with('cards')->where('menu_id', $id)->first();

        if (empty($pageData)) {
            $menu_id = 8;
        } else {
            $menu_id = $pageData->menu_id;
        }

        return view('admin.pages.services.index', ['services_lists' => Arr::get($services, '0.children'), 'pageData' => $pageData, 'navbar_id' => $menu_id]);
    }

    public function getServicePage(Request $request)
    {
        $services = NavMenu::with('children')->where('name', 'Services')->get();

        $pageData = ServicePagesData::with('cards')->where('menu_id', $request->navbar_id)->first();

        return view('admin.pages.services.index', ['services_lists' => Arr::get($services, '0.children'), 'pageData' => $pageData, 'navbar_id' => $request->navbar_id]);
    }

    public function createExplanationSection($id)
    {
        return view('admin.pages.services.createExplanationSection', ['updated_id' => $id]);
    }

    public function createFeatureSection()
    {
        return view('admin.pages.services.createFeatureSection');
    }

    public function createCard($id)
    {
        return view('admin.pages.services.createCard', ['parent_id' => $id]);
    }

    public function createToSection(Request $request)
    {
        return view('admin.pages.services.createToSection', ['parent_id' => $request->nvbar_id]);
    }

    public function editExplanationSection($id)
    {
        $explanationSection = json_decode((ServicePagesData::find($id))->explanation_section);

        return view('admin.pages.services.editExplanationSection', ['explanationSection' => $explanationSection, 'update_id' => $id]);
    }

    public function editFeatureSection($id)
    {
        return view('admin.pages.services.editFeatureSection');
    }

    public function editCard($id)
    {
        $cardData = PagesCardData::find($id);
        return view('admin.pages.services.editCard', ['cardData' => $cardData]);
    }

    public function editToSection($id)
    {
        $topsectionData = json_decode((ServicePagesData::find($id))->top_section);

        return view('admin.pages.services.editToSection', ['topsectionData' => $topsectionData, 'update_id' => $id]);
    }

    public function storeToSection(Request $request)
    {
        $imgpath = public_path('img/services/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        $input = [
            'heading' => $request->heading,
            'explanation' => $request->explanation,
            'img' => $fileName,
        ];

        $a = json_encode($input);

        $query = ServicePagesData::create([
            'menu_id' => $request->parent_id,
            'top_section' => $a
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('service.index', $query->menu_id);
    }

    public function updateToSection(Request $request, $id)
    {

        $updated_row = ServicePagesData::find($id);

        $imgpath = public_path('img/services/');

        if (empty($request->img)) {

            $updateimage = (json_decode($updated_row->top_section))->img;
        } else {

            $imagePath =  $imgpath . (json_decode($updated_row->top_section))->img;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }

        $input = [
            'heading' => $request->heading,
            'explanation' => $request->explanation,
            'img' => $updateimage,
        ];

        $data = json_encode($input);

        $updated_row->update([
            'top_section' => $data
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('service.index', $updated_row->menu_id);
    }


    public function storeExplanationSection(Request $request)
    {
        if ($request->img) {
            $imgpath = public_path('img/services/');

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
        } else {
            $fileName = '';
        }

        $updated_row = ServicePagesData::find($request->updated_id);

        $input = [
            'heading' => $request->heading,
            'exp' => $request->exp,
            'img' => $fileName
        ];

        $data = json_encode($input);

        $updated_row->update([
            'explanation_section' => $data
        ]);


        toastr()->success('Created Successfully');
        return redirect()->route('service.index', $updated_row->menu_id);
    }

    public function updateExplanationSection(Request $request, $id)
    {

        $updated_row = ServicePagesData::find($id);

        $imgpath = public_path('img/services/');

        if (empty($request->img)) {

            $updateimage = (json_decode($updated_row->explanation_section))->img;
        } else {

            $imagePath =  $imgpath . (json_decode($updated_row->explanation_section))->img;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }

        $input = [
            'heading' => $request->heading,
            'exp' => $request->exp,
            'img' => $updateimage
        ];

        $data = json_encode($input);

        $updated_row->update([
            'explanation_section' => $data
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('service.index', $updated_row->menu_id);
    }


    public function storeCard(Request $request)
    {
        $navbar_id = ServicePagesData::find($request->parent_id);

        PagesCardData::create([
            'parent_id' => $request->parent_id,
            'heading' => $request->heading,
            'explanation' => json_encode($request->lists)
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('service.index',  $navbar_id->menu_id);
    }

    public function deleteCard($id)
    {
        $delete_row = PagesCardData::find($id);

        $parrent = ServicePagesData::find($delete_row->parent_id);

        $delete_row->delete();

        toastr()->success('Card Delete Successfully');
        return redirect()->route('service.index', $parrent->menu_id);
    }

    public function updateCard(Request $request, $id)
    {
        $updated_row = PagesCardData::find($id);

        $parrent = ServicePagesData::find($updated_row->parent_id);

        $updated_row->update([
            'explanation' => json_encode($request->lists)
        ]);

        toastr()->success('Card Update Successfully');
        return redirect()->route('service.index', $parrent->menu_id);
    }
}
