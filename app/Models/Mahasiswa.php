<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  use HasFactory;

  protected $fillable = [
    'nama',
    'fakultas_id',
    'alamat',
    'tanggal_lahir',
    'npm'
  ];


  public function fakultas()
  {
    return $this->belongsTo(Fakultas::class);
  }
}
