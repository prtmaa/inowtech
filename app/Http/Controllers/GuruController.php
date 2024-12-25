<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class  GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();

        return view('guru.index', compact('kelas'));
    }

    public function data()
    {
        $guru = Guru::with('kelas')->get();

        return datatables()
            ->of($guru)
            ->addIndexColumn()
            ->addColumn('nama_kelas', function ($guru) {
                return $guru->kelas->nama_kelas ?? 'Belum ada kelas';
            })
            ->addColumn('aksi', function ($guru) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`' . route('guru.update', $guru->id) . '`)" class="btn btn-sm btn-info btn-flat"><i class="fa fa-pen"></i></button>
                    <button type="button" onclick="deleteData(`' . route('guru.destroy', $guru->id) . '`)" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function show($id)
    {
        $guru = Guru::find($id);

        return response()->json($guru);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $guru = new Guru();

        $guru->nama_guru = $request->nama_guru;
        $guru->id_kelas = $request->id_kelas;

        $guru->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);
        $guru->nama_guru = $request->nama_guru;
        $guru->id_kelas = $request->id_kelas;
        $guru->update();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return response(null, 204);
    }
}