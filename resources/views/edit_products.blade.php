@extends('template.default')

@section('title', 'Edit Products')

@section('content')
@php
$products = DB::table('products')->select('product_name', 'quantity')->where('id', '=', $_GET['id'])->get();
@endphp
<form class="container" action="{{ route('edit_products.edit') }}" method="GET">
  <div class="row justify-content-center">
    <div class="col-sm-3 mb-3">
      <label for="productID" class="form-label">Product ID:</label>
      <input class="form-control" name="productID" id="productID" autocomplete="off" value="<?php echo $_GET['id'] ?>" readonly>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-3 mb-3">
      <label for="productName" class="form-label">Product Name:</label>
      <input type="text" class="form-control" name="product_name" id="productName" autocomplete="off" value="<?php echo $products[0]->product_name ?>">
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-3 mb-3">
      <label for="productQuantity" class="form-label">Product Quantity:</label>
      <input type="number" class="form-control" name="product_quantity" id="productQuantity" autocomplete="off" value="<?php echo $products[0]->quantity ?>">
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-3 mb-3">
      <button class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
@endsection