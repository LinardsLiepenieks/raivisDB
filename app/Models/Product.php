<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories()
    {
       return $this->hasOne(Category::class);
    }

    public function warehouses()
    {
       return $this->hasOne(Warehouse::class);
    }
}
