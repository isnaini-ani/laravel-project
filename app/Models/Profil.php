<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil_sekolah';

    public $timestamps = true;

    protected $fillable = [
    	'id',
    	'judul', 
    	'isi',
    ];

    protected $hidden = [
        'created_at',
        'updated_at', 
    ];
}