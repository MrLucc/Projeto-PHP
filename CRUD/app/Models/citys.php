<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citys extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'citys';

    protected $fillable = [
        'longradouro',
        'número',
        'bairro',
    ];
}
