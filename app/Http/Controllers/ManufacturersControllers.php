<?php
namespace App\Http\Controllers;
use App\Models\manufacturers;

use App\Models\catalogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManufacturersControllers extends Controller
{
    public function index()
    {
        $manufacturers = manufacturers::all();
        return view('manufacturers.index', ['manufacturers'=>$manufacturers]);
    }
    public function delete($id)
    {
        $team = manufacturers::findOrFail($id);
        $team->delete();
        return redirect('/manufacturers');
    }
    public function edit($id)
    {
        $manufacturers = manufacturers::findOrFail($id);
        return view('manufacturers.edit', ['manufacturers'=>$manufacturers]);
    }
    public function update($id)
    {
        $manufacturers = manufacturers::findOrFail($id);
        $manufacturers->name = request('name');  
        $manufacturers->capital = request('capital'); 
        $manufacturers->found_at = request('found_at'); 
        $manufacturers->national = request('national');  
        $manufacturers->save();
        return redirect('/manufacturers');
    }
    public function show($id)
    {
        $manufacturers = manufacturers::findOrFail($id);
        $catalogs = $manufacturers->catalogs;
        return view('manufacturers.show', ['manufacturers' => $manufacturers, 'catalogs' =>  $catalogs]);
    }
    public function create(){
        return view('manufacturers.create');
    }
    public function store()
    {
        $catalogs = manufacturers::create([
            'name'=>request('name'),
            'capital'=>request('capital'),
            'found_at'=>request('found_at'), 
            'national'=>request('national'), 
        ]);
        return redirect('/manufacturers');
    }
}
