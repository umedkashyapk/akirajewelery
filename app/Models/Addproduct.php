<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Addproduct extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable = [
        'id',
        'category_id',
        'category',
        'description',
        'titel',
        'price',
        'discounts',
        'availability',
        'rating',
        'tex',
        'image'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
    ];


    public function category_info()
        {
            return $this->hasMany(Category::class,'parent_id','id');
        }
}
