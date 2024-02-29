<?php

namespace App\Http\Controllers;


use App\Models\jenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Digunakan untuk menampilkan data Jenis Produk
        $jenis = jenisProduk::all();
        if (count($jenis)) {
            $hasil = [
                "message" => "Data Jenis Produk",
                "data" => $jenis
            ];

            return response()->json($hasil, 200);
        } else {
            $fails = [
                "message" => "Data Jenis Produk Tidak Ada",
                "data" => $jenis
            ];
            return response()->json($fails, 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Digunakan Untuk menghapus data
        $jenis = jenisProduk::where('id', $id)->first();
        if (isset($jenis)) {
            $jenis->delete();
            $succes = [
                "message" => "Data Jenis Produk Berhasil",
                "data" => $jenis
            ];
            return response()->json($succes, 200);
        } else {
            $fails = [
                "message" => "Data Jenis Produk Tidak Ada",
                "data" => $jenis
            ];
            return response()->json($fails, 404);
        }
    }
}
