@if (count($products) === 0)
... html showing no products found
@elseif (count($products) >= 1)
    @foreach($products as $products)
    show products
    @endforeach
@endif
