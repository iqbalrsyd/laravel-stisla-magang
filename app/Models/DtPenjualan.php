<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DtPenjualan extends Model
{
    use HasFactory;

    protected $table = 'dt_penjualans'; // Jika menggunakan nama tabel khusus
    protected $fillable = ['refid_cabang', 'nominal'];

    public function cabang()
    {
        return $this->belongsTo(MsCabang::class, 'refid_cabang');
    }
}
