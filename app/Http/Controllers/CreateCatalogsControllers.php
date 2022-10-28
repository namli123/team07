<?php

namespace App\Http\Controllers;
use App\Models\CreateCatalogModel;
use App\Models\catalogs;
use Illuminate\Http\Request;

class CreateCatalogsControllers extends Controller
{
    public function index()
    {
        $catalogs = catalogs::all();
        return view('catalogs.index', ['catalogs'=>$catalogs]);
    }
}
