<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
	protected $fillable = [
		'name',
		'parent_id',
	];

	public function attributes (){
		return Attributes::all();
	}

	public function variations (){
		return self::where(['parent_id'=>$this->id])->get();
	}

	public function product_attributes (){
		return $this->hasMany(ProductAttributes::class);
	}

}
