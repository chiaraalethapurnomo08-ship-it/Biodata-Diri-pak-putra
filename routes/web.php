
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// ROUTE PUBLIC (ROOT PATH)
Route::get('/', function () {
    $biodata = session('biodata');

    return view('welcome', compact('biodata'));
});

// ROUTE MANAGEMENT (ADMIN)
Route::get('/admin', function () {
    $biodata = session('biodata', []);

    return view('admin', compact('biodata'));
});

// ROUTE SIMPAN BIODATA
Route::post('/admin', function (Request $request) {

    $data = $request->validate([
        'nama' => 'required',
        'ttl' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required',
        'hobi' => 'required',
        'cita_cita' => 'required'
    ]);

    session(['biodata' => $data]);

    return redirect('/');
});
