<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function list()
    {
        return view('panel.subcategories.list');
    }
}
