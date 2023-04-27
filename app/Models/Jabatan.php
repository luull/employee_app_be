<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";
    protected $fillable = ['jabatan'];
    use HasFactory;
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
