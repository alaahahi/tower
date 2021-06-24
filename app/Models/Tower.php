<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tower extends Model
{
    protected $table = 'tower';
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
