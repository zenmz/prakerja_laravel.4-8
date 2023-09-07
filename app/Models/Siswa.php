<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $guarded = ['id'];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }
    
    // protected $primaryKey = 'id_siswa';
    // protected $fillable = [
    //     'nis',
    //     'nama',
    //     'alamat',
    // ];

}
