<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\AomaAssetTable;
use Inertia\Inertia;

class AomaMasterData extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $masterasset = AomaAssetTable::all();

        return inertia::render(
            'Aoma/MasterData',
            [
                'masterData' => $masterasset
            ]
        );
    }

    public function addasset(Request $request){

        AomaAssetTable::create([
            'kategori' => $request->kategori,
            'nomerassetbaru' => $request->nomerasset,
            'deskripsi' => $request->deskripsi,
            'wct' => $request->workcenter,
            'tanggal_akuisisi' => $request->tanggal,
            'supplier' => $request->supplier,
            'po' => $request->po,
            'status_asset' => 'Active',
        ]);
        return to_route('fams.masterdatafams');

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
