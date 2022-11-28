<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ["nim", "nama", "umur", "alamat", "kota", "kelas", "jurusan", 'created_at', 'updated_at'];
    protected $table = "mahasiswa"; // custom nama tabel
    protected $primaryKey = "nim"; // custom primary key
    public $incrementing = false; // mematikan auto increment
    protected $keyType = "string"; // custom type primary key (defaultnya autoincrement longint)

}
