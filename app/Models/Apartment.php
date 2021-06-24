<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Apartment extends Model
{
    protected $table = 'apartment';
    protected $fillable = [ 'id','photo','price','discount_price','discount_end_data','visible','tower_Id'];
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function apartment_translation($lang)
    {
        return $this->hasMany(Apartment_translation::class,'apartment_Id')->where('lang','=',$lang)->select('title');
    }
    public function apartment_translation_all()
    {
        return $this->hasMany(Apartment_translation::class,'apartment_Id');
    }
    
    public function order_details()
    {
        return $this->hasMany(Order_details::class,'apartment_Id');
    }
}
