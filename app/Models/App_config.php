<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class App_config extends Model
{
    use Translatable;
    //protected $translatable = ['full_name', 'phone'];
    protected $table = 'App_config';
    use HasFactory;
}
