<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelaporan';
    protected $table = "input";
    protected $fillable =['nik','id_kategori','lokasi','ket'];
    /**
     * Belongs To aspirasi ->aspirasi-input
     * 
     * @return void
     */
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class,'nik','nik');
    }
    public function Kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori','id_kategori');
    }

    public function InputAspirasi(){
        return $this->belongsTo(InputAspirasi::class,'id_pelaporan','id_pelaporan');
    }
}
