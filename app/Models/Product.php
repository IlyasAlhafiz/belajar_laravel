<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name_product','merk','price','stock','image'];
    public $timestamps = true;

    // relasi ke tabel Order
    public function order()
    {
        return $this->HasMany(Order::class,'id_product');
    }

    public function deleteImage(){
        if($this->image && file_exists(public_path('images/product' . $this->image))){
            return unlink(public_path('images/product' . $this->image));
        }
    }
}
