<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all(); 
        return view('list.index', compact('kelas'));
    }


    public function dataMurid(Request $request)
    {
        $kelasId = $request->get('kelas_id');
        $murid = Murid::with('kelas', 'guru')->where('id_kelas', $kelasId)->get();

        return datatables()
            ->of($murid)
            ->addIndexColumn()
            ->addColumn('nama_kelas', function ($murid) {
                return $murid->kelas->nama_kelas ?? 'Belum ada kelas';
            })
            ->addColumn('nama_guru', function ($murid) {
                return $murid->guru->nama_guru ?? 'Belum ada guru';
            })
            ->make(true);
    }

    public function dataGuru(Request $request)
    {
        $kelasId = $request->get('kelas_id');
        $guru = Guru::with('kelas')->where('id_kelas', $kelasId)->get();

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
}
