<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";
    protected $guarded = [];

    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class, 'id_kelas', 'id');
    }

    public function murids():HasMany
    {
        return $this->hasMany(Guru::class, 'id_kelas', 'id');
    }
}
