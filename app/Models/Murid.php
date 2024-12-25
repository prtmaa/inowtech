<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murid';
    protected $guarted =[];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }
}
