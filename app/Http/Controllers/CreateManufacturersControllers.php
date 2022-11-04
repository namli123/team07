<?php

namespace App\Http\Controllers;
use App\Models\manufacturers;
use Illuminate\Http\Request;

class CreateManufacturersControllers extends Controller
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
}
