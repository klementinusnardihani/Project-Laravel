<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $timestamps = false;
    protected $table="mahasiswa";
    protected $primaryKey="id";
    protected $fillable=['nama','nim','prodi','nilai'];
}
