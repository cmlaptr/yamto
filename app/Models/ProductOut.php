<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
    use HasFactory;
    protected $fillable=[
        'qty',
        'price',
        'sub_total'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function HistoryOut(){
        return $this->belongsTo(HistoryOut::class);
    }
}
