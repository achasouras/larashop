<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
	protected $table = 'product_attributes';
	protected $fillable = [
		'value',
		'product_id',
		'attribute_id',
	];
}
