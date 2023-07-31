<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $table = 'All_tab';

    protected $fillable = [
        'number',
        'string', 
    ];

    public $timestamps = false;
}