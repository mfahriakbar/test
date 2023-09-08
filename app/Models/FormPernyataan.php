<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPernyataan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'jabatan', 'instansi', 'kota', 'tanggal', 'ttd'];
    protected $guarded = ['id'];
}
