<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function addProduct(Request $request)
    {
        $productInfo = $request->validate(
            [
                'product_name' => 'required|min:2|string',
                'product_quantity' => 'required|min:1|integer'
            ]
        );

        Product::create(
            [
                'product_name' => $productInfo['product_name'],
                'quantity' => $productInfo['product_quantity']
            ]
        );

        return redirect()->back();
    }

    public function editProduct(Request $request)
    {
        $productInfo = $request->only('productID', 'product_name', 'product_quantity');

        Product::find($productInfo['productID'])->update([
            'product_name' => $productInfo['product_name'],
            'quantity' => $productInfo['product_quantity']
        ]);

        return redirect()->route('manage_products.page');
    }

    public function deleteProduct(Request $request)
    {
        $productID = $request->only('id');

        Product::find($productID['productID'])->delete();

        return redirect()->back();
    }
}
