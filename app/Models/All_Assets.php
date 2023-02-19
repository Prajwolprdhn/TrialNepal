<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All_Assets extends Model
{
    use HasFactory;
    protected $table = "all_assets";
    protected $fillable = [
        'name',
        'contact',
        'location',
        'category',
        'asset_img',
    ];
}
