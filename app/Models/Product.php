<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'stock',
        'price',
        'desc' 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->hasMany(Category::class);
    }

    public function supplier(){
        return $this->hasMany(Supplier::class);
    }

    public function historyIn(){
        return $this->belongsTo(HistoryIn::class);
    }

    public function productOut(){
        return $this->belongsTo(ProductOut::class);
    }
    
}
