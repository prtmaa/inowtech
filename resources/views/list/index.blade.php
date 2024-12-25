@extends('layouts.master')

@section('tittle')
    List
@endsection

@section('content')
    <div class="container">

        <div class="form-group">
            <label for="kelas_id">Pilih Kelas</label>
            <select id="kelas_id" class="form-control">
                <option value="">Pilih Kelas</option>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <h4>Murid</h4>
        <table class="table table-bordered" id="muridTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Murid</th>
                    <th>Nama Kelas</th>
                    <th>Nama Guru</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>


        <h4>Guru</h4>
        <table class="table table-bordered" id="guruTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Nama Kelas</th>
                </tr>
            </thead>
            <tbody>
             
            </tbody>
        </table>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            var muridTable = $('#muridTable').DataTable({
                processing: true,
                serverSide: true,
                "language": {
                    "sProcessing":   "Sedang memproses...",
                    "sLengthMenu":   "Tampilkan _MENU_ entri",
                    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                    "sSearch":       "Pencarian:",
                    "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                        "sLast":     "Terakhir"
                    },
                },
                ajax: function(data, callback, settings) {
                    var kelasId = $('#kelas_id').val(); 
                    $.ajax({
                        url: '{{ route('murid-guru.data-murid') }}',
                        data: { kelas_id: kelasId },
                        success: function(response) {
                            callback({
                                draw: settings.draw,
                                recordsTotal: response.recordsTotal,
                                recordsFiltered: response.recordsFiltered,
                                data: response.data
                            });
                        }
                    });
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'nama_murid', name: 'nama_murid' },
                    { data: 'nama_kelas', name: 'kelas.nama_kelas' },
                    { data: 'nama_guru', name: 'guru.nama_guru' },
                ]
            });

            var guruTable = $('#guruTable').DataTable({
                processing: true,
                serverSide: true,
                "language": {
                    "sProcessing":   "Sedang memproses...",
                    "sLengthMenu":   "Tampilkan _MENU_ entri",
                    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                    "sSearch":       "Pencarian:",
                    "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                        "sLast":     "Terakhir"
                    },
                },
                ajax: function(data, callback, settings) {
                    var kelasId = $('#kelas_id').val(); 
                    $.ajax({
                        url: '{{ route('murid-guru.data-guru') }}',
                        data: { kelas_id: kelasId },
                        success: function(response) {
                            callback({
                                draw: settings.draw,
                                recordsTotal: response.recordsTotal,
                                recordsFiltered: response.recordsFiltered,
                                data: response.data
                            });
                        }
                    });
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'nama_guru', name: 'nama_guru' },
                    { data: 'nama_kelas', name: 'kelas.nama_kelas' },
                ]
            });

  
            $('#kelas_id').on('change', function() {
                muridTable.ajax.reload(); 
                guruTable.ajax.reload(); 
            });
        });
    </script>
@endpush