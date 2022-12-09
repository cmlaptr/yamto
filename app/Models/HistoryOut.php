<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryOut extends Model
{
    use HasFactory;
    protected $fillable=[
        'qty',
        'price'
    ];

    public function productOut(){
        return $this->hasOne(ProductOut::class);
    }
}
