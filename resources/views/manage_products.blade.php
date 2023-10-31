@extends('template.default')

@section('title', 'Manage Products')

@section('content')
<form action="{{ route('manage_products.add') }}" method="post">
  @csrf
  <label for="product_name">Product Name:</label>
  <input type="text" name="product_name" id="product_name">
  <label for="product_quantity">Quantity:</label>
  <input type="number" name="product_quantity" id="product_quantity">
  <button>Submit</button>
</form>
<table border="1">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    </tr>
  </tbody>
</table>
@endsection