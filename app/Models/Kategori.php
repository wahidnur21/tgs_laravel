<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $primaryKey = 'kode_kategori';

    protected $KeyType = 'string';

    protected $fillable = [
        'kode_kategori',
        'nama',
        'ket',
    ];
}
