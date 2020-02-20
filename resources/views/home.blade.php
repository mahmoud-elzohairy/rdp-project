<h2>All Products: </h2>
<table border="1">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Price</td>
        <td>Quantity</td>
    </tr>

    @foreach($products as $k => $product)
        <tr>
            <td>{{ ++$k }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
        </tr>
    @endforeach
</table>

