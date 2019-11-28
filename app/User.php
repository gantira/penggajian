<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nik', 'image', 'nip', 'pendidikan', 'kota_lahir', 'tgl_lahir', 'tgl_masuk', 'jk', 'agama', 'status', 'alamat', 'foto', 'jenis_karyawan', 'divisi_id', 'jabatan_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }

    public function lembur()
    {
        return $this->hasMany(lembur::class);
    }

    public function pinjaman()
    {
        return $this->hasMany(Pinjaman::class);
    }


}
