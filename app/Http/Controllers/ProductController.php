<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {

        $products= Product::all();
        return $products;
    }

    public function getByCategory($id) {

        $productCategory = Category::with('products')
            ->where('id', $id)
            ->get()
            ->toArray();
        return $productCategory[0];
    }

    public function getOne($id) {
        $product = Product::where('id' , $id)->first();
        return $product;

    }

    public function deleteOne($id) {
        Product::destroy($id);
    }
}
