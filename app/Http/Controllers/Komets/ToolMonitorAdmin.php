<?php

namespace App\Http\Controllers\Komets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
class ToolMonitorAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tools = DB::CONNECTION('komets')->SELECT("SELECT * FROM tool_monitor");

        return inertia::render(
            'Komets/ToolMonitorAdmin',
            [
                'tool'=>$tools,
            ]
        );
    }

    function addtool(Request $request){
        $nama = $request->nama;
        $merk = $request->merk;
        $resoulusi = $request->resolusi;
        $noseri = $request->noseri;
        $status = $request->status;
        $lokasi = $request->lokasi;
        $kalibrasi = $request->kalibrasi;
        $plan = $request->plan;
        $kondisi = $request->kondisi;
        $checksheet = $request->checksheet;
        $user = Auth::user()->username;
        $tgl = date('Y-m-d H:i:s');
        DB::CONNECTION('komets')->INSERT("INSERT INTO tool_monitor (nama,merk,resolusi,no_seri,status,lokasi,kondisi,is_checksheet,created_date,created_by)
        values (?,?,?,?,?,?,?,?,?,?)",[$nama,$merk,$resoulusi,$noseri,$status,$lokasi,$kondisi,$checksheet,$tgl,$user]);

        DB::CONNECTION('komets')->INSERT("INSERT INTO schedule_kalibrasi (no_seri,frekuensi,plan) values (?,?,?)",
        [$noseri,$kalibrasi,$plan]);

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
