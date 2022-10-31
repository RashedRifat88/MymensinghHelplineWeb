<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosisTestOrder extends Model
{
    use HasFactory;


    protected $casts = [
        'test_list' => 'json',
        'test_price_list' => 'json',
    ];

}
