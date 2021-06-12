<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rak_buku extends Model
{
    use HasFactory;

    protected $table = 'rak_buku';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';

    protected $fillable = [
        'id',
        'id_buku',
        'id_jenis_buku'
    ];
}
