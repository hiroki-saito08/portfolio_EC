<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'price',
        'image_path',
        'size',
        'category',
        'gender',
    ];

    //リレーション
    public function carts()
    {
        return $this->hasMany('App\Models\Cart');
    }

    public function keeps()
    {
        return $this->hasMany('App\Models\Keep');
    }

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    }
}
