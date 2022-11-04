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
    public function delete($id)
    {
        $team = catalogs::findOrFail($id);
        $team->delete();
        return redirect('/catalogs');
    }
    public function edit($id)
    {
        $catalogs = catalogs::findOrFail($id);
        return view('catalogs.edit', ['catalogs'=>$catalogs]);
    }
    public function update($id)
    {
        $catalogs = catalogs::findOrFail($id);
        $catalogs->name = request('name'); 
        $catalogs->mid = request('mid'); 
        $catalogs->price = request('price'); 
        $catalogs->evaluaation = request('evaluaation'); 
        $catalogs->issue_date = request('issue_date'); 
        $catalogs->revenue = request('revenue'); 
        $catalogs->game_type = request('game_type');  
        $catalogs->save();
        return redirect('/catalogs');
    }
}
