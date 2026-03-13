<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    // Tambahkan properti nama tabel agar Laravel tidak bingung
    protected $table = 'm_level'; 
    protected $primaryKey = 'level_id';

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class);
    }
}