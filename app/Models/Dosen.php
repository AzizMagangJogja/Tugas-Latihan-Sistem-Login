<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'dosens';

    protected $fillable = [
        'id',
        'user_id',
        'kelas_id',
        'kode_dosen',
        'nip',
        'name'
    ];

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id');
        return $this->hasMany(Kelas::class, 'kelas_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}