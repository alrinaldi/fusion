<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AomaAssetTable extends Model
{
    use HasFactory;
    protected $connection = 'aoma';
    protected $table = 'asset';
    protected $fillable = ['kategori','nomerassetbaru','wct','deskripsi','tanggal_akuisisi','status_asset','supplier','po'];

}
