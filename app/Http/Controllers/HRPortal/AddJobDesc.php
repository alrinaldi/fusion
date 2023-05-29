<?php

namespace App\Http\Controllers\HRPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class AddJobDesc extends Controller
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

        $jobdesc = DB::connection('hrportal')->SELECT("
        SELECT * FROM jobdesc where status = ?
        ",['Created']);

        $jobtitledata = DB::CONNECTION('sqlsrv')->SELECT("
        SELECT DISTINCT(a.JobTitle) as jobtitledt FROM JobTitle a join Seksi b on a.IdSeksi = b.IdSeksi join Departemen c on b.IdDepartemen = c.IdDepartemen
        where departemen = ? and a.JobTitle != ?
        ",[$dept,'Departement Head']);

        $jobtitled = DB::connection('sqlsrv')->SELECT("
        SELECT a.JobTitle,a.KJ,b.Seksi,c.Departemen FROM JobTitle a join Seksi b on a.IdSeksi = b.IdSeksi join Departemen c on b.IdDepartemen = c.IdDepartemen
        where departemen = ? and a.JobTitle != ?
        ",[$dept,'Department Head']);

        return inertia::render(
            'HRPortal/AddJobDesc',
            [
                'dept' => $dept,
                'seksi' => $seksi,
                'jobdesc' => $jobdesc,
                'jobtitledata' => $jobtitledata,
                'jobtitled' => $jobtitled,
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

    public function createjobdesc(Request $request){


        $jobtitle = $request->jobtitle;
        $responsibleto = $request->responsibleto;
        $section = $request->section;
        $departement = $request->departement;
        $rev = $request->rev;
        $effectivedate = $request->effectivedate;
        $division = $request->division;
        $revisiondate = $request->revisiondate;
        $mainpurpose = $request->mainpurpose;
        $keyaccountabilities = $request->keyaccountabilities;
        $majorchallenges = $request->majorchallenges;
        $authority = $request->authority;
        $dimension = $request->dimension;
        $atasan = $request->atasan;
        $job = $request->job;
        $bawahan = $request->bawahan;
        $internalrelations = $request->internalrelations;
        $externalrelations = $request->externalrelations;
        $education = $request->education;
        $experience = $request->experience;
        $particularrequirement = $request->particularrequirement;
        $hardcompetency = $request->hardcompetency;
        $softcompetency = $request->sofycompetency;
        $user = Auth::user()->username;
        $date = date('Y-m-d');


        DB::INSERT("INSERT INTO jobdesc (jobtitle,responsible_to,section,department,division,effective_date,rev,revision_date,main_purpose,key_accountabilities,
        major_challenge,authority,dimension,atasan,job,bawahan,inernal_relations,external_relations,formal_education,experience,particular_requirement,
        id_hard_competency,id_soft_competency,status,created_date,created_by) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",[
            $jobtitle,$responsibleto,$section,$departement,$division,$effectivedate,$rev,$revisiondate,$mainpurpose,$keyaccountabilities,$majorchallenges,$authority,
            $dimension,$atasan,$job,$bawahan,$internalrelations,$externalrelations,$education,$experience,$particularrequirement,$hardcompetency,$softcompetency,
            'Open',$date,$user
        ]);
        return to_route('hrportal.addjobdesc');

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
