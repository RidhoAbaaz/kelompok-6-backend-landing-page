<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pisces extends Model
{
    use HasFactory;
    protected $table = 'piscess';
    protected $fillable = ['image', 'nama', 'nama_ilmiah', 'jenis', 'habitat'];
}
