<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mamalia extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'nama', 'nama_ilmiah', 'jenis', 'habitat'];
}
