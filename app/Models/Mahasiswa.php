<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    public $timestamps = false;
    protected $fillable = ['nama', 'alamat', 'tanggal_lahir'];
}
