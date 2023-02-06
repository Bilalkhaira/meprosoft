<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MigrationAndConversionController extends Controller
{
    public function index()
    {
        return view('admin.pages.services.index');
    }

    public function createWhatWeDoCard()
    {
        return view('admin.pages.services.createWhatWeDoCard');
    }

    public function editWhatWeDoCardMainSection()
    {
        return view('admin.pages.services.editWhatWeDoCardMainSection');
    }

    public function editWhatWeDoCard()
    {
        return view('admin.pages.services.editWhatWeDoCard');
    }

    public function editOurProgressSection()
    {
        return view('admin.pages.services.editOurProgressSection');
    }

    public function editOurProgressSectionCard()
    {
        return view('admin.pages.services.editOurProgressSectionCard');
    }

    public function createOurProgessCard()
    {
        return view('admin.pages.services.createOurProgessCard');
    }

    public function editJoinOurCommunity()
    {
        return view('admin.pages.services.editJoinOurCommunity');
    }
}
