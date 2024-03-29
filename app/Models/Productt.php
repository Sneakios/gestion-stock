<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productt extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category',
        'reference',
        'name',
        'description',
        'price',
        'picture',
        'state',
        'rate',
    ];
}
