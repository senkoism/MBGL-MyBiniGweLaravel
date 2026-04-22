<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route 
Route::get('/alamat', function() {
    echo "jalan rajawali 14.palembang";
    echo "<br>";
    echo "bejir keren banget gwa";
});

//route dinamis dengan parameter id
Route::get('/user/{id}', function($id) {
    echo "User id:" . $id;
});

//route dinamis dengan parameter nama
Route::get('/user1/{nama}', function($nama) {
    echo "User name:" . $nama;
});

//route dinamis dengan opsional parameter nama
Route::get('/user2/{nama?}', function($name = 'tamu') {
    echo "User name:" . $name;
});

//route dinamis dengan parameter nama dan id
Route::get('/user3/{nama},{id}', function($id, $name) {
    echo "User ID:" . $id;
    echo "<br>";
    echo "User name:" .$name;
});

################## Bagian paling penting disini ##################

//Router dengan metode POST
Route::post('/simpan', function(){
    echo "Data berhasil disimpan";
});
 
//Router dengan metode PUT
Route::put('/update/{id}', function($id){
    echo "Data berhasil diperbarui dengan ID: " . $id;
});
 
//Router dengan metode PATCH
Route::patch('/update2/{id}', function($id){
    echo "Data berhasil diperbarui dengan ID: " . $id;
});
 
//Router dengan metode DELETE
Route::delete('/hapus/{id}', function($id){
    echo "Data berhasil dihapus dengan ID: " . $id;
});
 
//Route untuk menampilkan halaman test_method
Route::get('/test-method', function(){
    return view('test_method');
});

//gek aku cek lagi
Route::get('/detailproduk/{name}', function($name){
    return view('produk.detail',
        ['product_name' => $name,
        'id'=> 101,
        'color' => 'silver',
        'stock' => 12
        ]
    );
});