<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\ppdbsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Selamat Datang Di Home';
});

Route::get('/about', function () {
    return 'Selamat Datang Dihalaman About';
});

Route::get('/contact', function () {
    return 'Selamat Datang Di Contact';
});


Route::get('/siswa', function () {

    $data_siswa = ['Rizky', 'Aldi', 'Rizal', 'Rizki', 'Rizal'];

    return view('tampil', compact('data_siswa'));
});


// route parameter
Route::get('/tes/{nama2}/{a}/{b}/{c}/{d}', function ($nama, $tl, $jk, $agama, $alamat) {
    return "Nama : " . $nama . "<br>" .
        "Tempat Lahir : " . $tl . "<br>" .
        "Jenis Kelamin : " . $jk . "<br>" .
        "Agama : " . $agama . "<br>" .
        "Alamat : " . $alamat;
});

Route::get('/hitung/{a}/{b}', function ($bil1, $bil2) {
    return "Bilangan 1 : " . $bil1 . "<br>" .
        "Bilangan 2 : " . $bil2 . "<br>" .
        "Hasil : " . $hasil = $bil1 + $bil2;
});

Route::get('/latihan1/{a}/{b}/{c}/{d}/{e}/{f}', function ($nama, $telp, $jenis, $brg, $jml, $pem) {
    switch ($jenis) {
        case 'Handphone':
            if ($brg == "Poco") {
                $harga = 3000000;
            } elseif ($brg == "samsung") {
                $harga = 5000000;
            } elseif ($brg == "Iphone") {
                $harga = 15000000;
            } else {
                $harga = 0;
            }
            break;

        case 'Laptop':
            if ($brg == "Lenovo") {
                $harga = 4000000;
            } elseif ($brg == "Acer") {
                $harga = 8000000;
            } elseif ($brg == "Macbook") {
                $harga = 20000000;
            } else {
                $harga = 0;
            }
            break;

        case 'TV':
            if ($brg == "Tohshiba") {
                $harga = 5000000;
            } elseif ($brg == "Samsung") {
                $harga = 8000000;
            } elseif ($brg == "Lg") {
                $harga = 10000000;
            }
            break;
    }

    $total = $harga * $jml;

    if ($total > 10000000) {
        $cashback = 500000;
    } else {
        $cashback = 0;
    }

    if ($pem == "transfer") {
        $potongan = 50000;
    } else {
        $potongan = 0;
    }

    return "Nama Pembeli : " . $nama . "<br>" .
        "Telpon : " . $telp . "<br>" .
        "-----------------------------" . "<br>" .
        "Jenis Barang : " . $jenis . "<br>" .
        "Nama Barang : " . $brg . "<br>" .
        "Harga : Rp." . number_format($harga) . "<br>" .
        "Jumlah : " . $jml . "<br>" .
        "-----------------------------" . "<br>" .
        "Total : Rp." . number_format($total = $harga * $jml) . "<br>" .
        "Cashback : Rp." . number_format($cashback) . "<br>" .
        "Pembayaran : " . $pem . "<br>" .
        "Potongan : Rp." . number_format($potongan) . "<br>" .
        "-----------------------------" . "<br>" .
        "Total Pembayaran : Rp." . number_format($totalpem = $total - $cashback - $potongan);
});


// //routing dengan model untuk barang
// Route::get('/barang', function(){

//     $barang = Barang::where('harga', '>', 3000000)->get();
//     return view('tampil_barang', compact('barang'));
// });



//routing dengan model
Route::get('/post', [PostsController::class, 'menampilkan']);
Route::get('/barang', [PostsController::class, 'menampilkan2']);


Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD
Route::resource('siswa', SiswasController::class); 



// latihan 2
Route::resource('ppdb', ppdbsController::class);