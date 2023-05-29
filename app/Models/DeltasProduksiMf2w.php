<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeltasProduksiMf2w extends Model
{
    use HasFactory;
    protected $connection = 'deltas';
    protected $table = 'produksi_mf2w';
}
