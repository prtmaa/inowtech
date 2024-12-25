<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guru extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $guarded =[];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public function murids():HasMany
    {
        return $this->hasMany(Guru::class, 'id_kelas', 'id');
    }
}
