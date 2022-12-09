<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'profit',
        'netto',
        'loss',
        'total'
    ];

    public function historyOut(){
        return $this->hasOne(HistoryOut::class);
    }
}
