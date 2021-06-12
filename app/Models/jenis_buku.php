<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_buku extends Model
{
    use HasFactory;

    protected $table = 'jenis_buku';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';

    protected $fillable = [
        'id',
        'jenis'
    ];
}
