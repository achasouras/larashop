<?php

namespace App\Helpers;

use App\Models\Products\Attributes;
use App\Models\Products\ProductAttributes;
class Product
{

	public static function check_product_routing ($path)
	{
//		@todo cache the urls in db table
		$att = Attributes::where(['name' => 'url'])->first();
		$product_attributes = ProductAttributes::where(['attribute_id' => '' . $att->id .''])->get();

		foreach ($product_attributes as $product_attribute){

			if($product_attribute->value === $path){
				return true;
			}
		}

		return false;
	}
}