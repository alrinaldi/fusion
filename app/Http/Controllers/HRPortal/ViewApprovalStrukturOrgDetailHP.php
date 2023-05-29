<?php

namespace App\Http\Controllers\HRPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ViewApprovalStrukturOrgDetailHP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $strukur = DB::CONNECTION('hrportal')->SELECT("SELECT * FROM struktur where dept = ? and status = ?",[$id,'Submited']);
        return inertia::render(
            'HRPortal/ViewApprovalStrukturOrgDetailHP',
            [
                'struktur' => $strukur,

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

     function approvestruktur(Request $request){
        $id = $request->ids;
        // print_r($id);
        foreach($id AS $key => $val):

            $idstruktur  = $request['ids'][$key];
            //echo " $val<br>";

            DB::CONNECTION('hrportal')->UPDATE("UPDATE struktur set status = ? where id = ?",['Submited',$idstruktur]);
        endforeach;
        return to_route('hrportal.viewapprovalstrukturorghp');
    }
}
