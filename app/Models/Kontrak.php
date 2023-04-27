<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{    
    protected $table = "kontrak";
    protected $fillable = ['kontrak'];
    use HasFactory;
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
