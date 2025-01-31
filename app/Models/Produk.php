<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama','harga','id_kategori','cover'];
    public $timestamps = true;

    // relasi ke tabel Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori');
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/siswa' . $this->cover))){
            return unlink(public_path('images/siswa' . $this->cover));
        }
    }
    
}
