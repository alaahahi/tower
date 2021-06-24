<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Apartment_translation extends Model
{
    protected $table = 'apartment_translation';
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
