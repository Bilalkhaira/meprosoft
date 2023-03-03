<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class ServiceController extends Controller
{
    public function applicationMigrationConversion()
    {
        $menu_id = NavMenu::where('name', 'Application Migration & Conversion')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.applicationMigrationConversion', ['data' => $data]);
    }

    public function enterpriseSolutionConsulting()
    {
        $menu_id = NavMenu::where('name', 'Enterprise Solution Consulting')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.enterpriseSolutionConsulting', ['data' => $data]);
    }

    public function GSTMigration()
    {
        $menu_id = NavMenu::where('name', 'GST Migration')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.GSTMigration', ['data' => $data]);
    }

    public function IPOCompliance()
    {
        $menu_id = NavMenu::where('name', 'IPO Compliance')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.IPOCompliance', ['data' => $data]);
    }

    public function PLCMESWeighBridgeIntegration()
    {
        $menu_id = NavMenu::where('name', 'PLC MES Weigh Bridge Integration')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.PLCMESWeighBridgeIntegration', ['data' => $data]);
    }

    public function resourceArgumentation()
    {
        $menu_id = NavMenu::where('name', 'Resource Argumentation')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.resourceArgumentation', ['data' => $data]);
    }

    public function riseWithS4HANAImplementation()
    {
        $menu_id = NavMenu::where('name', 'Rise with S4 HANA Implementation')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.riseWithS4HANAImplementation', ['data' => $data]);
    }

    public function SAPSupport()
    {
        $menu_id = NavMenu::where('name', 'SAP Support')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.SAPSupport', ['data' => $data]);
    }
}
