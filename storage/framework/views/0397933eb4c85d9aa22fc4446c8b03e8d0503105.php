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
        <td><a href="<?php echo e(route('posts.create'), false); ?>"class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i></a></td>
    </tr>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->id, false); ?></td>
            <td><?php echo e($product->name, false); ?></td>
            <td><?php echo e($product->price, false); ?></td>
            <td><?php echo e($product->description, false); ?></td>
            <td><a href="/product/<?php echo e($product->id, false); ?>/delete" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


</body>
</html>