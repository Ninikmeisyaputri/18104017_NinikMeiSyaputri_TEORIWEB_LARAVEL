<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'stuff';
    //memberi tahu tabel yang di gunakan tabel stuff
    protected $primaryKey = 'kode_barang';
    //memberi tahu pk nya kode_barang bukan id
}
