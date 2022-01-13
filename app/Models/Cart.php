<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// ソフトデリート設定
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    // ソフトデリート設定
    use HasFactory, SoftDeletes;
}
