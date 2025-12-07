<!-- packages/products/src/resources/views/index.blade.php -->
<h1>Product List</h1>
@if(isset($products) && count($products))
    <ul>
        @foreach($products as $product)
            <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
        @endforeach
    </ul>
@else
    <p>No products found.</p>
@endif