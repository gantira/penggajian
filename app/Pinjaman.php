<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $fillable = [
        'user_id', 'status', 'tanggal', 'besar_pinjaman', 'keterangan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeTotalPinjaman($query, $id)
    {
    	return $query->whereUserId($id)->whereStatus('Belum Lunas')->whereMonth('tanggal', \Carbon\Carbon::now()->month)->sum('besar_pinjaman');
    }
}
