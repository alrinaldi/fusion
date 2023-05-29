<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationAccess extends Model
{
    use HasFactory;
    protected $connection = 'deltas';
    protected $table = 'application_accesses';
}
