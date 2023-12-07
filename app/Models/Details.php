<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Details extends Model
{
    use HasFactory;

    public function getCategory()
    {
        return $this->belongsToMany(Category::class, 'id', 'parent_id');
    }
}
