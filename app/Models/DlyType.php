<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DlyType extends Model
{
    use HasFactory;
    protected $table = 'dly_type';
    protected $primaryKey = 'id';
}
