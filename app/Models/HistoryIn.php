<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryIn extends Model
{
    use HasFactory;
    protected $fillable=[
      'qty',
      'price'  
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function supplier(){
        return $this->hasMany(Supplier::class);
    }
}
