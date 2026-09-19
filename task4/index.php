<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Store</title>

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


<header
    style="
        height: 500px;
        background-image: url('images/header.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    "
>

    <h1 class="text-white bg-dark p-3">
        Welcome To Our Store
    </h1>

</header>


<div class="container mt-5 text-center">

    <?php if (isset($_SESSION['user'])): ?>

        <h2>
            Welcome <?php echo $_SESSION['user']['username']; ?>
        </h2>

    <?php else: ?>

        <h2>Welcome To Our Store</h2>

        <a href="account.php" class="btn btn-primary mt-3">
            Login
        </a>

    <?php endif; ?>

</div>

</body>
</html>