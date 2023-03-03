<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class CaseStudyControler extends Controller
{
    public function foodIndustry()
    {
        $menu_id = NavMenu::where('name', 'Food Industry')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.caseStudy.foodIndustry', ['data' => $data]);
    }

    public function mesproPaperlessManufacturing()
    {
        $menu_id = NavMenu::where('name', 'Mespro Paperless Manufacturing')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.caseStudy.mesproPaperlessManufacturing', ['data' => $data]);
    }

    public function digitalManufacturing()
    {
        $menu_id = NavMenu::where('name', 'Digital Manufacturing')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.caseStudy.digitalManufacturing', ['data' => $data]);
    }
}
