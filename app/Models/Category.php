<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [

        'nameCat',

    ];

    function departement(){
        return $this->belongsTo(Department::class);

    }
}
