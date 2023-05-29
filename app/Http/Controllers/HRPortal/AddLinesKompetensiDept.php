<?php

namespace App\Http\Controllers\HRPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
class AddLinesKompetensiDept extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $dept = Auth::user()->dept;
        $idkomp = $id;
        $seksi = DB::CONNECTION("sqlsrv")->SELECT("
        SELECT b.* FROM Departemen a join seksi b on a.IdDepartemen = b.IdDepartemen  where a.departemen = ?
        ",[$dept]);

        $kompetensi = DB::connection('hrportal')->SELECT("
        SELECT * FROM list_kompetensi where id_master_kompetensi = ? order by level asc
        ",[$id]);

        $masterkompetensi = DB::CONNECTION('hrportal')->SELECT("
        SELECT * FROM master_kompetensi where id = ?
        ",[$id]);

        foreach($masterkompetensi as $mk):
            $namamasterkompetensi = $mk->kategori;
        endforeach;

        $jobtitle = DB::connection('sqlsrv')->SELECT("
        SELECT a.JobTitle,a.KJ,b.Seksi,c.Departemen FROM JobTitle a join Seksi b on a.IdSeksi = b.IdSeksi join Departemen c on b.IdDepartemen = c.IdDepartemen
        where departemen = ? and a.JobTitle != ?
        ",[$dept,'Department Head']);

        // $kompetensiall = DB::connection('hrportal')->SELECT("
        // SELECT * FROM master_kompetensi where status = ?
        // ",['Open']);
        return inertia::render(
            'HRPortal/AddLinesKompetensiDept',
            [
                'dept' => $dept,
                'seksi' => $seksi,
                'kompetensi' => $kompetensi,
                'struktur' => $jobtitle,
                'idmasterkompetensi'=>$idkomp,
                'namakompetensi'=>$namamasterkompetensi,
            ]
        );

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

    public function createdkompetensilines(Request $request){
        $namakompetensi= $request->namakompetensi;
        $bagian = $request->bagian;
        $jobtitle = $request->jobtitle;
        $level = $request->level;
        $idkompetensi = $request->idkompetensi;
        $jtitle = $request->jtitle;
        $username = Auth::user()->username;
        $date = date('Y-m-d');

        DB::CONNECTION('hrportal')->INSERT(" INSERT INTO list_kompetensi (kompetensi,jobtitle,seksi,level,id_master_kompetensi,created_by,created_date)
         values (?,?,?,?,?,?,?) ",[
         $namakompetensi,$jtitle,$bagian,$level,$idkompetensi,$username,$date
        ]);

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
