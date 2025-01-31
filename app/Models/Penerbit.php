<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_penerbit'];
    public $timestamps = true;

        // relasi ke tabel buku
        public function buku()
        {
            return $this->hasMany(Buku::class);
        }
}
