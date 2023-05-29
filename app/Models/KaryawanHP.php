<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanHP extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv';
    protected $table = 'karyawan';
    protected $fillable = ['Nrp','Nama','wct','JobTitle','Seksi','Departmen','Divisi','Golongan','Pangkat','CostCenter'];

}
