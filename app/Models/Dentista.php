<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dentista extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
		'id',
		'name',
		'email',
		'cro',
		'cro_uf',
		'created_at',
		'updated_at',
		'deleted_at'
	];

}
