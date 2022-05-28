<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories()
    {
        $this->hasOne(Category::class);
    }

    public function warehouses()
    {
        $this->hasOne(Warehouse::class);
    }
}
