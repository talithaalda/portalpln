@php
    $product = file_get_contents('https://dummyjson.com/products/1');
    $product = json_decode($product, true);
@endphp


<p>Nama : {{ $product['title'] }}</p>
<p>Deskripsi : {{ $product['description'] }}</p>
<p>Diskon : {{ $product['discountPercentage'] }}</p>
<p>Rating : {{ $product['rating'] }}</p>
<p>Stok : {{ $product['stock'] }}</p>
<p>Brand : {{ $product['brand'] }}</p>
<p>Kategori : {{ $product['category'] }}</p>
<p>Images : <img src="{{ $product['images'][0] }}" alt=""> </p>
<p>Images : <img src="{{ $product['images'][1] }}" alt=""> </p>
<p>Images : <img src="{{ $product['images'][2] }}" alt=""> </p>
<p>Images : <img src="{{ $product['images'][3] }}" alt=""> </p>
<p>Images : <img src="{{ $product['images'][4] }}" alt=""> </p>
