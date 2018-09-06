<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

<div class="container col-6">
<table class="table table-striped">
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
</div>
    <div class="container">
        {{$products->links()}}</td>
  </div> 
</body>
    </html>