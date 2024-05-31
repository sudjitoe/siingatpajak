<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawais';
    protected $fillable = ['nip', 'nama', 'jenis_kelamin', 'id_telegram'];

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()
            ->where('nip', 'like', "%{$search}%")
            ->orWhere('nama', 'like', "%{$search}%")
            ->orWhere('jenis_kelamin', 'like', "%{$search}%")
            ->orWhere('id_telegram', 'like', "%{$search}%");
    }
}
