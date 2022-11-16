<?php

namespace App\Http\Controllers;
use App\Models\CreateCatalogModel;
use App\Models\catalogs;
use App\Models\manufacturers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatalogsControllers extends Controller
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
        return redirect('/');
    }
    public function edit($id)
    {
        $catalogs = DB::table('manufacturers')
        ->select('manufacturers.id', 'manufacturers.name')
        ->orderBy('manufacturers.id', 'asc')
        ->get();

        $data = [];
        foreach ($catalogs as $catalog)
        {
            $data[$catalog->id] = $catalog->name;
        }
        $catalogs = catalogs::findOrFail($id);
        return view('catalogs.edit', ['catalogs'=>$catalogs, 'manufacturers'=>$data]);
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
        return redirect('/');
    }
    public function show($id)
    {
        $catalogs = catalogs::findOrFail($id);
        $manufacturers = manufacturers::findOrFail($catalogs->mid);

        return view('catalogs.show', ['catalogs' => $catalogs, 'manufacturers_name' => $manufacturers->name]);
    }
    public function create(){
        $catalogs = DB::table('manufacturers')
        ->select('manufacturers.id', 'manufacturers.name')
        ->orderBy('manufacturers.id', 'asc')
        ->get();

        $data = [];
        foreach ($catalogs as $catalog)
        {
            $data[$catalog->id] = $catalog->name;
        }
        return view('catalogs.create',['manufacturers'=>$data]);
    }
    public function store()
    {
        $catalogs = catalogs::create([
            'name'=>request('name'),
            'mid'=>request('mid'),
            'price'=>request('price'), 
            'evaluaation'=>request('evaluaation'), 
            'issue_date'=>request('issue_date'), 
            'revenue'=> request('revenue'), 
            'game_type'=>request('game_type'),
        ]);
        
        return redirect('/');
    }
}
