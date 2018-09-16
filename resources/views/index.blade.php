<?php
$products = [];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<table class="table-responsive table table-bordered">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Description</td>
        <td><a href="{{route('posts.create')}}"class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i></a></td>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td><a href="/product/{{$product->id}}/delete" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>


</body>
</html>