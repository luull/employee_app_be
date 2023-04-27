<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $fillable = ['nama','jab_id','kon_id'];
 
    use HasFactory;

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jab_id');
    }
    public function kontrak()
    {
        return $this->belongsTo(Kontrak::class, 'kon_id');
    }
    
}
