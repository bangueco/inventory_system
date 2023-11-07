@extends('template.default')

@section('title', 'Dashboard')

@section('links')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection

@section('content')

@php
$total_products = DB::table('products')->select('product_name')->groupBy('product_name')->get()->count();
$total_items = DB::table('products')->selectRaw('SUM(quantity), 0 as total_quantity')->get();
@endphp
<div class="statistics">
    <div class="statistics_card">
        <div class="title h1">Total Product:</div>
        @php
        echo '<p class="text-white fw-bold">'. $total_products . ' products total' .'</p>';
        @endphp
    </div>
    <div class="statistics_card">
        <div class="title h1">Total Items:</div>
        @php
        echo '<p class="text-white fw-bold">'. $total_items[0]->total_quantity . ' items total' .'</p>';
        @endphp
    </div>
</div>
<div class="container">
    <table class="table table-secondary table-hover table-bordered table-responsive">
        <thead class="table-success">
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @php

            $products = DB::table('products')
            ->select('product_name', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_name')
            ->get();

            foreach($products as $product) {
            echo '<tr>';
                echo '<td>' . $product->product_name . '</td>';
                echo '<td>' . $product->total_quantity . '</td>';
                echo '</tr>';
            }
            @endphp
        </tbody>
    </table>
</div>
@endsection