<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll() {
        // $dataProductDariModel = Product::all();
        return view('product.display', ["products" => "Ini product"]);
    }

    public function saveNew(Request $request) {

    }

    public function show($id) {
        // ini action show dengan parameter $id yng diperoleh dari route. ogituuuu
    }

    public function detail($param1, $param2) {

    }

    public function showAllProduct() {
        return "Tampilkan semua produk";
    }
}
