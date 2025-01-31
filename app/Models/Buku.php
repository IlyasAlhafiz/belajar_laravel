<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_buku','harga','stok','image','id_penerbit','tanggal_penerbit','id_genre'];
    public $timestamps = true;

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class,'id_penerbit');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class,'id_genre');
    }

    public function deleteImage(){
        if($this->image && file_exists(public_path('images/buku' . $this->image))){
            return unlink(public_path('images/buku' . $this->image));
        }
    }
}
