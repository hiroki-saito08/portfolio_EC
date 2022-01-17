<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// ソフトデリート設定
use Illuminate\Database\Eloquent\SoftDeletes;

class Keep extends Model
{
    // ソフトデリート設定
    use HasFactory, SoftDeletes;

    //リレーション
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
