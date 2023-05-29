<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturHP extends Model
{
    use HasFactory;
    protected $connection = 'hrportal';
    protected $table = 'struktur';
    protected $fillable = ['nrp','nama','kj','jabatan','seksi','dept','divisi'];
}
