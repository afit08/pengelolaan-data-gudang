<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['auth', 'ceklevel:bagian gudang,owner']], function(){
Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/databarangs', 'DatabarangController@index')->name('databarang');
Route::get('/create-databarangs', 'DatabarangController@create')->name('create-databarang');
Route::post('/save-databarangs', 'DatabarangController@store')->name('save-databarang');
Route::get('/edit-databarangs/{id}', 'DatabarangController@edit')->name('edit-databarang');
Route::post('/update-databarangs/{id}', 'DatabarangController@update')->name('update-databarang');
Route::get('/delete-databarangs/{id}', 'DatabarangController@destroy')->name('delete-databarang');
Route::get('/cetak-databarangs', 'DatabarangController@print')->name('cetak-databarangs');

Route::get('/datasuppliers', 'DatasupplierController@index')->name('datasupplier');
Route::get('/create-datasuppliers', 'DatasupplierController@create')->name('create-datasupplier');
Route::post('/save-datasuppliers', 'DatasupplierController@store')->name('save-datasupplier');
Route::get('/edit-datasuppliers/{id}', 'DatasupplierController@edit')->name('edit-datasupplier');
Route::post('/update-datasuppliers/{id}', 'DatasupplierController@update')->name('update-datasupplier');
Route::get('/delete-datasuppliers/{id}', 'DatasupplierController@destroy')->name('delete-datasupplier');
Route::get('/cetak-datasuppliers', 'DatasupplierController@print')->name('cetak-datasuppliers');

Route::get('/barangmasuks', 'BarangmasukController@index')->name('barangmasuk');
Route::get('/create-barangmasuks', 'BarangmasukController@create')->name('create-barangmasuk');
Route::post('/save-barangmasuks', 'BarangmasukController@store')->name('save-barangmasuk');
Route::get('/edit-barangmasuks/{id}', 'BarangmasukController@edit')->name('edit-barangmasuk');
Route::post('/barangmasuk/update', 'BarangmasukController@update')->name('update-barangmasuk');
Route::get('/delete-barangmasuks/{id}', 'BarangmasukController@destroy')->name('delete-barangmasuk');
Route::get('/cetak-barangmasuks', 'BarangmasukController@print')->name('cetak-barangmasuks');

Route::get('/barangkeluars', 'BarangKeluarController@index')->name('barangkeluar');
Route::get('/create-barangkeluars', 'BarangKeluarController@create')->name('create-barangkeluar');
Route::post('/save-barangkeluars', 'BarangKeluarController@store')->name('save-barangkeluar');
Route::get('/edit-barangkeluars/{id}', 'BarangKeluarController@edit')->name('edit-barangkeluar');
Route::post('/barangkeluar/update', 'BarangKeluarController@update')->name('update-barangkeluar');
Route::get('/delete-barangkeluars/{id}', 'BarangKeluarController@destroy')->name('delete-barangkeluar');
Route::get('/cetak-barangkeluars', 'BarangKeluarController@print')->name('cetak-barangkeluars');

Route::get('/laporans', 'LaporanController@index')->name('laporan');
Route::get('/create-laporans', 'LaporanController@create')->name('create-laporan');
Route::post('/save-laporans', 'LaporanController@store')->name('save-laporan');
Route::get('/edit-laporans/{id}', 'LaporanController@edit')->name('edit-laporan');
Route::post('/update-laporans/{id}', 'LaporanController@update')->name('update-laporan');
Route::get('/delete-laporans/{id}', 'LaporanController@destroy')->name('delete-laporan');
Route::get('/cetak-laporans', 'LaporanController@cetakForm')->name('cetak-laporan');
Route::get('/laporan-tanggal/{tglawal}/{tglakhir}', 'LaporanController@cetakFormTanggal')->name('laporan-tanggal');

Route::get('/user-databarangs', 'DatabarangController@user')->name('user-databarang');
Route::get('/user-datasuppliers', 'DatasupplierController@user')->name('user-datasupplier');
Route::get('/user-barangmasuks', 'BarangmasukController@user')->name('user-barangmasuk');
Route::get('/user-barangkeluars', 'BarangKeluarController@user')->name('user-barangkeluar');
Route::get('/user-gudangs', 'GudangController@index')->name('user-gudang');
Route::get('/create-gudangs', 'GudangController@create')->name('create-gudang');
Route::post('/save-gudangs', 'GudangController@store')->name('save-gudang');
Route::get('/edit-gudangs/{id}', 'GudangController@edit')->name('edit-gudang');
Route::post('/update-gudangs/{id}', 'GudangController@update')->name('update-gudang');
Route::get('/user-laporans', 'LaporanController@user')->name('user-laporan');
Route::get('/delete-gudangs/{id}', 'GudangController@destroy')->name('delete-gudang');
Route::get('password', 'PasswordController@edit') 
->name('user.password.edit');

Route::patch('password', 'PasswordController@update')
->name('user.password.update');
});
Route::group(['middleware' => ['auth', 'ceklevel:owner']], function(){
Route::get('/user-databarangs', 'DatabarangController@user')->name('user-databarang');
Route::get('/user-datasuppliers', 'DatasupplierController@user')->name('user-datasupplier');
Route::get('/user-barangmasuks', 'BarangmasukController@user')->name('user-barangmasuk');
Route::get('/user-barangkeluars', 'BarangKeluarController@user')->name('user-barangkeluar');
Route::get('/user-gudangs', 'GudangController@index')->name('user-gudang');
Route::get('/create-gudangs', 'GudangController@create')->name('create-gudang');
Route::post('/save-gudangs', 'GudangController@store')->name('save-gudang');
Route::get('/edit-gudangs/{id}', 'GudangController@edit')->name('edit-gudang');
Route::post('/update-gudangs/{id}', 'GudangController@update')->name('update-gudang');
Route::get('/delete-gudangs/{id}', 'GudangController@destroy')->name('delete-gudang');
Route::get('user-password', 'OwnerpasswordController@edit')
->name('user.Ownerpassword.edit');

Route::patch('user-password', 'OwnerpasswordController@update')
->name('user.Ownerpassword.update');
});
Route::get('/login', function(){
    return view('pengguna.login');
})->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/registrasi', 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi', 'LoginController@simpanregistrasi')->name('simpanregistrasi');