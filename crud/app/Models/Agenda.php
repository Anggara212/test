<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agendas';
    protected $fillable = [
        'namaguru',
        'materipembelajaran',
        'matapelajaran',
        'jampelajaran',
        'absensi',
        'kelas',
        'jenispembelajaran',
        'linkpembelajaran',
        'dokumentasi',
        'keterangan'
    ];
}
