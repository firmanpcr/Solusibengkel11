<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $primaryKey = 'mitra_id';
    protected $table = 'mitra';

    protected $fillable = [
        'nama_mitra',
        'alamat',
        'nomor_telepon',
        'email',
        'gender',
        'jenis_kemitraan', 'Platinum', 'Gold', 'Silver',
        'tanggal_bergabung',
    ];
}
