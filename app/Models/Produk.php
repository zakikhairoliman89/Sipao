<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $KeyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    // public function setFilenamesAttribute($value)
    // {
    //     $this->attributes['filenames'] = json_encode($value);
    // }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'produk_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class,'produk_id');
    }

}
