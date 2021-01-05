<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
     'active' => 0
    ];

    //eloquent accessors
    //mutator allows you to alter data before it's saved to a database.
    // On the other hand, the accessor allows you to alter data after it's fetched from a database.
    //naming convention => get+column_name+attr
    public function getActiveAttribute($attribute)
    {
       return $this->activeOptions()[$attribute];
    }

    //eloquent scopes
    //Scopes offer you a way of extracting a part of a query from your controller and into your model to simplify your queries and keep them cleaner.
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeinActive($query)
    {
        return $query->where('active', 0);
    }

    //a customer belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions(){
        return [
            1 => 'active',
            0 => 'Inactive'
        ];
    }
}
