<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'no_telp',
        'jenis_pekerjaan',
        'domisili'
    ];
    use HasFactory;
}
