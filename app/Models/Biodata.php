<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodata';

    protected $fillable = [
        'full_name',
        'username',
        'password',
        'nim',
        'email',
        'agama',
        'jenis_kelamin',
    ];
}
