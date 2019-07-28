<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
	protected $table = 'attributes';
	protected $fillable = [
		'name',
		'position',
		'parent_required',
		'variation_required',
	];




}
