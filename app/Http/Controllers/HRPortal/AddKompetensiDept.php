<?php

namespace App\Http\Controllers\HRPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
class AddKompetensiDept extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dept = Auth::user()->dept;
        $seksi = DB::CONNECTION("sqlsrv")->SELECT("
        SELECT b.* FROM Departemen a join seksi b on a.IdDepartemen = b.IdDepartemen  where a.departemen = ?
        ",[$dept]);

        $kompetensi = DB::connection('hrportal')->SELECT("
        SELECT * FROM master_kompetensi where status = ? and dept in (?,?)
        ",['Aktif',$dept,'All']);

        // $kompetensiall = DB::connection('hrportal')->SELECT("
        // SELECT * FROM master_kompetensi where status = ?
        // ",['Open']);


        return inertia::render(
            'HRPortal/AddKompetensiDept',
            [
                'dept' => $dept,
                'seksi' => $seksi,
                'kompetensi' => $kompetensi,
            ]
        );


    }

    public function createkompetensimaster(Request $request){
        $dept = Auth::user()->dept;
        $kategori = $request->kategori;
        $description = $request->description;
        $user = Auth::user()->username;
        $date = date('Y-m-d');
        DB::CONNECTION('hrportal')->INSERT("INSERT INTO master_kompetensi (kategori,description,status,type,created_date,created_by,dept)
        values (?,?,?,?,?,?,?)",[$kategori,$description,'Aktif','Hard Competency',$date,$user,$dept]);
 //        return to_route('hrportal.addkompetensidept');

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
