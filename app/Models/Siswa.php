<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    
    public $timestamps = true;

    public $primaryKey = 'nis';

    protected $fillable = [
    	'nis',
    	'nama_lengkap',
    	'jk',
    	'alamat',
    	'no_telp',
    	'user_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
