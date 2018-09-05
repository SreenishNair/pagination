<html>
<head></head>
<body>
    
<table class="table table-bordered table-hover table-striped">
   <thead> <h1>Products</h1></thead>
    <thead>
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>Product Type</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->details}}</td>
            <td>{{$row->product_type}}</td>
            <td>{{$row->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    
        {{$products->links()}}</td>
    
</body>

    </html>