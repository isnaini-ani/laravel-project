<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory; 

    protected $table = 'kelas';

    public $timestamps = true;

    public $incrementing = false; 

    public $primaryKey = 'kode';

    protected $fillable = [
    	'id',
    	'nama',
    	'tingkat',
    	'jurusan',
    ];

    protected $hidden = [
    	'created_at',
    	'updated_at',
    ];
}
