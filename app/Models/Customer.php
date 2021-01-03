<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    //eloquent scopes
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeinActive($query)
    {
        return $query->where('active', 0);
    }
}
