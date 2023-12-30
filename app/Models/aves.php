<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aves extends Model
{
    use HasFactory;
    protected $table = 'avess';
    protected $fillable = ['image', 'nama', 'nama_ilmiah', 'jenis', 'habitat'];
}
