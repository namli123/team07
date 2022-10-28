<?php

namespace App\Http\Controllers;

use App\Models\CreateCatalogModel;
use App\Http\Requests\StoreCreateCatalogModelRequest;
use App\Http\Requests\UpdateCreateCatalogModelRequest;

class CreateCatalogModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateCatalogModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreateCatalogModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateCatalogModel  $createCatalogModel
     * @return \Illuminate\Http\Response
     */
    public function show(CreateCatalogModel $createCatalogModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateCatalogModel  $createCatalogModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateCatalogModel $createCatalogModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreateCatalogModelRequest  $request
     * @param  \App\Models\CreateCatalogModel  $createCatalogModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreateCatalogModelRequest $request, CreateCatalogModel $createCatalogModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateCatalogModel  $createCatalogModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateCatalogModel $createCatalogModel)
    {
        //
    }
}
