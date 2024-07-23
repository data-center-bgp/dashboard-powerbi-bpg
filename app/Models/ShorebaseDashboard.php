<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShorebaseDashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'finance',
    ];
}
