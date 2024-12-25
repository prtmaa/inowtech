<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class  KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kelas.index');
    }

    public function data()
    {
        $kelas = Kelas::all();

        return datatables()
            ->of($kelas)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kelas) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`' . route('kelas.update', $kelas->id) . '`)" class="btn btn-sm btn-info btn-flat"><i class="fa fa-pen"></i></button>
                    <button type="button" onclick="deleteData(`' . route('kelas.destroy', $kelas->id) . '`)" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $kelas = Kelas::find($id);

        return response()->json($kelas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $kelas = new Kelas();

        $kelas->nama_kelas = $request->nama_kelas;

        $kelas->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->update();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return response(null, 204);
    }
}