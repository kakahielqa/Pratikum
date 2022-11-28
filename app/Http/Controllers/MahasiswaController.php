<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Redis;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa');
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        $data = $request->all();
        unset($data['_token']);
        // print_r($data);
        $nim = @$request->nim;

        if ($model = Mahasiswa::find($nim)) {
            $data['update_at'] = date("Y-m-d H:i:s");
            $model->update($data);
        } else {
            $model = new Mahasiswa();
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['updated_at'] = date("Y-m-d H:i:s");
            $model->insert($data);
        }
        return redirect('create')->with('status', 'Data mahasiswa berhasil disimpan/diedit');
    }

    public function delete(Request $request)
    {
        $nim = $request->nim;
        $model = Mahasiswa::find($nim);
        $model->delete();
        $data = Mahasiswa::all();
        return view('mahasiswa.read', ['datanya' => $data]);
    }

    public function edit(Request $request)
    {
        $nim = $request->nim;
        $data = Mahasiswa::find($nim);
        // $data=Mahasiswa::all();
        return view('mahasiswa.edit', ['datanya' => $data]);
    }

    public function read()
    {
        $model = new Mahasiswa;
        $data = $model->all();
        // echo "<pre>";
        return view('mahasiswa.read', ['datanya' => $data]);
    }
}
