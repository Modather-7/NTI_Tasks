<?php

session_start();

$products = [

    'Product 1' => [
        'price' => '620',
        'img' => '1.png',
        'desc' => 'This is product number one.'
    ],

    'Product 2' => [
        'price' => '6500',
        'img' => '2.png',
        'desc' => 'This is product number two.'
    ],

    'Product 3' => [
        'price' => '1200',
        'img' => '3.png',
        'desc' => 'This is product number three.'
    ],

    'Product 4' => [
        'price' => '850',
        'img' => '4.png',
        'desc' => 'This is product number four.'
    ],

    'Product 5' => [
        'price' => '3000',
        'img' => '5.png',
        'desc' => 'This is product number five.'
    ],

    'Product 6' => [
        'price' => '4500',
        'img' => '6.png',
        'desc' => 'This is product number six.'
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>All Products</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    >

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="index.php">
        My Store
    </a>

    <div class="navbar-nav ml-auto">

        <a class="nav-item nav-link" href="index.php">
            Home
        </a>

        <a class="nav-item nav-link" href="products.php">
            All Products
        </a>

        <a class="nav-item nav-link" href="account.php">
            Account
        </a>

        <?php if (isset($_SESSION['user'])): ?>

            <a class="nav-item nav-link" href="logout.php">
                Logout
            </a>

        <?php endif; ?>

    </div>

</nav>


<div class="container products-page">

    <h1 class="text-center mb-5">
        All Products
    </h1>


    <div class="row">

        <?php foreach ($products as $product => $values): ?>

            <div class="col-md-4 mb-4">

                <div class="card product-card">

                    <img
                        src="images/<?php echo $values['img']; ?>"
                        class="card-img-top"
                        height="250"
                        style="object-fit: cover;"
                    >

                    <div class="card-body">

                        <h5 class="card-title">
                            <?php echo $product; ?>
                        </h5>

                        <p class="card-text">
                            <?php echo $values['desc']; ?>
                        </p>

                        <p class="font-weight-bold">
                            $<?php echo $values['price']; ?>
                        </p>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

</body>
</html>