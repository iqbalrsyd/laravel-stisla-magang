<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsCabang extends Model
{
    use HasFactory;

    protected $table = 'ms_cabangs'; // Jika menggunakan nama tabel khusus
    protected $fillable = ['nama_cabang', 'alamat'];

    public function penjualan()
    {
        return $this->hasMany(DtPenjualan::class, 'refid_cabang');
    }
}
