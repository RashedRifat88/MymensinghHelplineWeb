<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at'
    ];

    // protected $casts = [
    //     'top_scroll_text' => 'json',
    // ];

}
