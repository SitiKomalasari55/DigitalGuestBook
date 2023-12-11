<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamuUndangan extends Model
{
    use HasFactory;

    protected $table = 'bukutamuundangan';

    protected $fillable = [
        'id',
        'name',
        'notelepon',
        'alamat',
        'email'
    ];
}
