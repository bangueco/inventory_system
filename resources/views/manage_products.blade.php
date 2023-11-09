@extends('template.default')

@section('title', 'Manage Products')

@section('links')
<link rel="stylesheet" href="{{ asset('assets/css/manage_products.css') }}">
@endsection

@section('content')
<form class="p-3" action="{{ route('manage_products.add') }}" method="post">
  @csrf
  <div>
    <div class="form-floating mb-3">
      <input class="form-control" type="text" name="product_name" id="product_name" placeholder="Product Name">
      <label for="product_name">Product Name</label>
      @error('product_name')
      <p class="text text-danger"> {{ $message }} </p>
      @enderror
    </div>
    <div class="form-floating mb-3">
      <input class="form-control" type="number" name="product_quantity" id="product_quantity" placeholder="Product Quantity">
      <label for="product_quantity">Product Quantity</label>
      @error('product_quantity')
      <p class="text text-danger"> {{ $message }} </p>
      @enderror
    </div>
  </div>
  <button class="btn btn-success">Submit</button>
</form>
<div class="table-container">
  <table class="table table-sm table-bordered text-center table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-secondary">
      @php

      $products = DB::table('products')->get();

      foreach($products as $product) {
      echo '<tr>';
        echo '<td>' . $product->id . '</td>';
        echo '<td>' . $product->product_name . '</td>';
        echo '<td>' . $product->quantity . '</td>';
        echo '<td class="d-flex justify-content-center gap-2"><button class="edit_product btn btn-light">Edit</button><button class="delete_product btn btn-danger">Delete</button></td>';
        echo '</tr>';
      }
      @endphp
    </tbody>
  </table>
</div>
@endsection

@section('javascript')
<script src="{{ asset('assets/javascript/manage_products.js') }}"></script>
@endsection