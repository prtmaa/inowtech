<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;
use Laravel\Prompts\Key;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        $guru = Guru::all();

        return view('murid.index', compact('kelas', 'guru'));
    }

    public function data()
    {
        $murid = Murid::with('kelas', 'guru')->get();
    
        return datatables()
            ->of($murid)
            ->addIndexColumn()
            ->addColumn('nama_guru', function ($murid) {
                return optional($murid->guru)->nama_guru ?? 'Belum ada guru';
            })
            ->addColumn('nama_kelas', function ($murid) {
                return $murid->kelas->nama_kelas ?? 'Belum ada kelas';
            })
            
            ->addColumn('aksi', function ($murid) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`' . route('murid.update', $murid->id) . '`)" class="btn btn-sm btn-info btn-flat"><i class="fa fa-pen"></i></button>
                    <button type="button" onclick="deleteData(`' . route('murid.destroy', $murid->id) . '`)" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $murid = Murid::find($id);

        return response()->json($murid);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $murid = new Murid();

        $murid->nama_murid = $request->nama_murid;
        $murid->id_kelas = $request->id_kelas;
        $murid->id_guru = $request->id_guru;

        $murid->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murid $murid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $murid = Murid::find($id);
        $murid->nama_murid = $request->nama_murid;
        $murid->id_kelas = $request->id_kelas;
        $murid->id_guru = $request->id_guru;
        $murid->update();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $murid = Murid::find($id);
        $murid->delete();

        return response(null, 204);
    }
}
