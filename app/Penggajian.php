<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    protected $fillable = [
        'user_id', 'status', 'tanggal', 'besar_pinjaman', 'keterangan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
