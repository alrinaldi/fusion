<?php

namespace App\Http\Controllers\HRPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StrukturOrgHP extends Controller
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
            $strukur = DB::CONNECTION('hrportal')->SELECT("
            SELECT * FROM struktur where dept = ? and status = ?
            ",[$dept,'Created']);
            foreach($strukur as $sr):
                $nrps[] = $sr->nrp;
            endforeach;
            if(isset($nrps)){
                $nrpin = implode(',', $nrps);
                $karyawan = DB::CONNECTION("sqlsrv")->SELECT("
                SELECT * FROM Karyawan where departemen = ? and statuskaryawan = ? and nrp not in($nrpin)
                ",[$dept,'TETAP']);
            }else{
                $karyawan = DB::CONNECTION("sqlsrv")->SELECT("
                SELECT * FROM Karyawan where departemen = ? and statuskaryawan = ?
                ",[$dept,'TETAP']);

            }

            $seksi = DB::CONNECTION("sqlsrv")->SELECT("
            SELECT b.* FROM Departemen a join seksi b on a.IdDepartemen = b.IdDepartemen  where a.departemen = ?
            ",[$dept]);
            return inertia::render(
            'HRPortal/ViewStrukturOrgHP',
            [
                'dept' => $dept,
                'struktur' => $strukur,
                'karyawan' => $karyawan,
                'seksi' => $seksi,
            ]
        );
    }

    public function addstruktur(Request $request){
        $nrp = $request->nrp;
        $nama = $request->nama;
        $kj  = $request->kj;
        $jabatan = $request->jabatan;
        $bagian = $request->bagian;
        $dept = Auth::user()->dept;

        DB::CONNECTION('hrportal')->INSERT("INSERT INTO struktur (nrp,nama,kj,jabatan,seksi,dept,status) values (?,?,?,?,?,?,?) ",
        [$nrp,$nama,$kj,$jabatan,$bagian,$dept,'Created']);

       return to_route('hrportal.strukturorghp');

    }

    public function submitstruktur(Request $request){
        $id = $request->ids;
        // print_r($id);
        foreach($id AS $key => $val):

            $idstruktur  = $request['ids'][$key];
            //echo " $val<br>";

            DB::CONNECTION('hrportal')->UPDATE("UPDATE struktur set status = ? where id = ?",['Submited',$idstruktur]);
        endforeach;
        return to_route('hrportal.strukturorghp');

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
        DB::CONNECTION('hrportal')->DELETE("DELETE FROM struktur where id = ?",[$id]);
    }
    public function updatesruktur(Request $request){

        $ids = $request->ids;
        $nrp = $request->nrp;
        $kj = $request->kj;
        $bagian = $request->bagian;
        $jabatan = $request->jabatan;
        $nama = $request->nama;

        DB::CONNECTION('hrportal')->UPDATE("UPDATE struktur set nrp = ?,nama = ?,kj=?,jabatan=?,seksi = ? where id = ?",
        [$nrp,$nama,$kj,$jabatan,$bagian,$ids]);

       return to_route('hrportal.strukturorghp');

    }

    function approvestruktur(Request $request){
        $id = $request->ids;
        // print_r($id);
        foreach($id AS $key => $val):

            $idstruktur  = $request['ids'][$key];
            //echo " $val<br>";

            DB::CONNECTION('hrportal')->UPDATE("UPDATE struktur set status = ? where id = ?",['Approved',$idstruktur]);
        endforeach;
        return to_route('hrportal.viewapprovalstrukturorghp');
    }
    // function deleteStruktur(Request $request){

    //         $id = $request->id;
    //         DB::CONNECTION("hrportal")->DELETE("DELETE FROM struktur where id = ?",[$id]);
    //         return redirect()->back();

    // }
}
