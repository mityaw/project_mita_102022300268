<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Super extends Model
{
    //
    use HasFactory;

    protected $fillabel = [
        'Nama hero',
        'Kekuatan', 
        'Asal'
    ];
    protected $table = 'supers';
    protected $primaryKey = 'id';

}

