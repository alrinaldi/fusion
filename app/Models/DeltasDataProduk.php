<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeltasDataProduk extends Model
{
    use HasFactory;
    protected $connection = 'deltas';
    protected $table = 'data_produk';
}
