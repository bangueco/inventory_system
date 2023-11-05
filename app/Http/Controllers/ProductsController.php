<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function addProduct(Request $request)
    {
        $products = $request->validate(
            [
                'product_name' => 'required|min:2|string',
                'product_quantity' => 'required|min:1|integer'
            ]
        );

        DB::table('products')->insertGetId(
            [
                'product_name' => $products['product_name'],
                'quantity' => $products['product_quantity']
            ]
        );

        return redirect()->back();
    }

    public function editProduct(Request $request)
    {
        $product = $request->only('productID', 'product_name', 'product_quantity');
        DB::table('products')->where('id', $product['productID'])
            ->update([
                'product_name' => $product['product_name'],
                'quantity' => $product['product_quantity']
            ]);

        return redirect()->route('manage_products.page');
    }
}
