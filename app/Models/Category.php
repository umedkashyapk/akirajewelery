<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Category extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table ='Categories';
    protected $fillable = [
        'id',
        'parent_id',
        'category',
        
        
    ];
   

    
}
