<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aspirasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_aspirasi';
    protected $table = "Aspirasi";
    protected $fillable =['nik','id_pelaporan','id_kategori','status','feedback'];  
   /**
     * Belongs To aspirasi ->aspirasi-input
     * 
     * @return void
     */
    public function Kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori','id_kategori');
    }
    public function Penduduk()
    {
        return $this->belongsTo(Penduduk::class,'nik','nik');
    }

    public function inpspirasi(){
        return $this->belongsTo(InputAspirasi::class,'id_pelaporan','id_pelaporan');
    }

    
   
}