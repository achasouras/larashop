<?php

namespace App\Http\Controllers\Control;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\Attributes;
use App\Models\Products\ProductAttributes;
use Session;
class Products extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct ()
	{

	}

	public function index (){
		return view('control.products.products')->with(['products' => Product::all()]);
	}

	public function create_product_view (){
		return view('control.products.product_create')->with(['attributes' => Attributes::all()]);
	}

	public function create_attribute_view (){
		return view('control.products.attribute_create');
	}

	public function create_product_submit (Request $request){

		$request->validate([
			'name' => 'required|max:191|min:2',
		]);

		// Retrieve the attributes
		$attributes = [];
		$request_values = $request->all();
		foreach ($request_values as $key => $value){
			if(strpos($key, 'attid') === 0){
				$attributes[ltrim($key,'attid')] = $value;
			}
		}

		// Create the product
		$product = Product::create(['name' => $request->get('name')]);

		// Add the product attributes
		foreach ($attributes as $attribute_id => $attribute_value){
			ProductAttributes::create([
				'value' => $attribute_value,
				'product_id' => $product->id,
				'attribute_id' => $attribute_id,
			]);
		}

		Session::flash('message', 'Product "' . $product->name . '" has been created');
		return redirect()->route('products');

	}

	public function create_attribute_submit (Request $request){

		$validatedData = $request->validate([
			'name' => 'required|max:191|min:2',
		]);

		if(!$position = $request->get('position')){
			$position = 1;
		}

		$request->get('parent_required') === 'on' ? $parent_required = 1 : $parent_required = 0;
		$request->get('variation_required') === 'on' ? $variation_required = 1 : $variation_required = 0;

		Attributes::create([
			'name' => $request->get('name'),
			'position' => $position,
			'parent_required' => $parent_required,
			'variation_required' => $variation_required,
		]);

		Session::flash('message', 'Attribute created');
		return view('control.products.attribute_create');

	}
}
