<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Seragam extends Model
{
    use SoftDeletes;
    protected $table = "seragams";
    protected $fillable = [
        "jenis_seragam",
        "ukuran",
        "harga"
    ];

    protected $hidden;
}
