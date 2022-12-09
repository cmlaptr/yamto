<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable=[
        'spl_name',
        'spl_contact',
        'spl_address'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function history_msk(){
        return $this->belongsTo(HistoryIn::class);
    }
}
