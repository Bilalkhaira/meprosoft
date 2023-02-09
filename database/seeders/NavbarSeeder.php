<?php

namespace Database\Seeders;

use App\Models\Navbar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Home Navbar
        $parrent_id = Navbar::create([
            'name' => 'Home',
        ]);

        $parrent_id = Navbar::create([
            'name' => 'Corporate Overview',
            'parrent_id' => $parrent_id->id,
        ]);

        $home_nv = [
            ['name' => 'About Mesprosoft', 'parrent_id' => $parrent_id->id],
            ['name' => 'Management Team', 'parrent_id' => $parrent_id->id],
            ['name' => 'Core Values', 'parrent_id' => $parrent_id->id],
            ['name' => 'Why Mesprosoft', 'parrent_id' => $parrent_id->id],
        ];

        Navbar::insert($home_nv);

        // Services Navbar
        $parrent_id = Navbar::create([
            'name' => 'Services',
        ]);

        $services_nv = [
            ['name' => 'Application Migration & Conversion', 'parrent_id' => $parrent_id->id],
            ['name' => 'Enterprise Solution Consulting', 'parrent_id' => $parrent_id->id],
            ['name' => 'GST Migration', 'parrent_id' => $parrent_id->id],
            ['name' => 'IPO Compliance', 'parrent_id' => $parrent_id->id],
            ['name' => 'PLC MES Weigh Bridge Integration', 'parrent_id' => $parrent_id->id],
            ['name' => 'Resource Argumentation', 'parrent_id' => $parrent_id->id],
            ['name' => 'Rise with S4 HANA Implementation', 'parrent_id' => $parrent_id->id],
            ['name' => 'SAP Support', 'parrent_id' => $parrent_id->id],
            ['name' => 'Digital Manufacturing Cloud', 'parrent_id' => $parrent_id->id],
            ['name' => 'ALM(Application Life Cycle Management)', 'parrent_id' => $parrent_id->id],
            ['name' => 'SAP Fiori Development', 'parrent_id' => $parrent_id->id],
        ];
        Navbar::insert($services_nv);

         // Product And Solutions Navbar
         $parrent_id = Navbar::create([
            'name' => 'Products & Solutions',
        ]);

        $product_nv = [
            ['name' => 'Dispatch Automation', 'parrent_id' => $parrent_id->id],
            ['name' => 'Dynamic Machine Scheduling ', 'parrent_id' => $parrent_id->id],
            ['name' => 'Electronic Batch Manufacturing', 'parrent_id' => $parrent_id->id],
            ['name' => 'Handheld Mobile Bar Code', 'parrent_id' => $parrent_id->id],
            ['name' => 'Loan Management Solution', 'parrent_id' => $parrent_id->id],
            ['name' => 'Mespro GPS Preconfigured Analytics', 'parrent_id' => $parrent_id->id],
            ['name' => 'Mespro Life Science CFR Part 11', 'parrent_id' => $parrent_id->id],
            ['name' => 'Mespro Optimized MRP', 'parrent_id' => $parrent_id->id],
            ['name' => 'Mespro Paperess Manufacturing ', 'parrent_id' => $parrent_id->id],
            ['name' => 'Mespro X-Steps', 'parrent_id' => $parrent_id->id],
            ['name' => 'O2C Automation', 'parrent_id' => $parrent_id->id],
            ['name' => 'Purchase Budget Check & Approval', 'parrent_id' => $parrent_id->id],
            ['name' => 'Smart Foundry', 'parrent_id' => $parrent_id->id],
            ['name' => 'TS 16949 Compliant KAPA ', 'parrent_id' => $parrent_id->id],
        ];

        Navbar::insert($product_nv);

         // Case Study Navbar
         $parrent_id = Navbar::create([
            'name' => 'Case Study',
        ]);

        $case_study_nv = [
            ['name' => 'Food Industry', 'parrent_id' => $parrent_id->id],
            ['name' => 'Digital Manufacturing', 'parrent_id' => $parrent_id->id],
            ['name' => 'Mespro Paperless Manufacturing', 'parrent_id' => $parrent_id->id],
            ['name' => 'S/4 Hana Private cloud', 'parrent_id' => $parrent_id->id],
            ['name' => 'S/4 Hana Conversion', 'parrent_id' => $parrent_id->id],
        ];

        Navbar::insert($case_study_nv);
    }
}
