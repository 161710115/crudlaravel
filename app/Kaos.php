<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kaos extends Model
{
	protected $table = 'kaos';
    protected $fillable = ['model','bahan','warna','harga'];
    public $timestamps = true;
}
