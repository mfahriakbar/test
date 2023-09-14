<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPernyataan extends Model
{
    use HasFactory;
    // protected $table = 'form_pernyataans';
    // protected $fillable = ['nama', 'email', 'jabatan', 'instansi', 'kota', 'tanggal', 'ttd', 'isi'];
    protected $guarded = ['id'];
}
