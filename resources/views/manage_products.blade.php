@extends('template.default')

@section('title', 'Manage Products')

@section('content')
<div class="container">
  <form class="p-3" action="{{ route('manage_products.add') }}" method="post">
    @csrf
    <div class="input-group mb-3">
      <span class="input-group-text">Product Name:</span>
      <input class="form-control" type="text" name="product_name" id="product_name">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Quantity:</span>
      <input class="form-control" type="number" name="product_quantity" id="product_quantity">
    </div>
    <button class="btn btn-success">Submit</button>
  </form>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php

      $products = DB::table('products')->get();

      foreach($products as $product) {
      echo '<tr>';
        echo '<td>' . $product->product_name . '</td>';
        echo '<td>' . $product->quantity . '</td>';
        echo '<td><button>Edit</button><button>Delete</button></td>';
        echo '</tr>';
      }
      @endphp
    </tbody>
  </table>
</div>
@endsection