<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        return view('admin.pages.faq.index');
    }

    public function edit($id)
    {
        return view('admin.pages.faq.edit');
        
    }
}
