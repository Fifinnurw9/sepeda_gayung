<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sepeda extends Model
{
    protected $table = 'tbl_sepeda';
    protected $fillable = ['no_seri','nama','jenis','warna'];
}
