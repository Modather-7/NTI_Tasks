<?php

session_start();

$errors = [];


// Login
if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    if ($email == '') {

        $errors[] = "Email is required.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Please enter a valid email.";

    }


    if ($password == '') {

        $errors[] = "Password is required.";

    } elseif (strlen($password) < 6) {

        $errors[] = "Password must be at least 6 characters.";

    }


    if (empty($errors)) {

        $_SESSION['user'] = [

            'email' => $email,

            'password' => $password,

            'username' => ''

        ];

        header('Location: products.php');
        exit;
    }
}


// Profile
if (isset($_POST['profile'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $facebook = trim($_POST['facebook']);
    $twitter = trim($_POST['twitter']);
    $instagram = trim($_POST['instagram']);


    if ($username == '') {

        $errors[] = "Username is required.";

    }


    if ($password == '') {

        $errors[] = "Password is required.";

    } elseif (strlen($password) < 6) {

        $errors[] = "Password must be at least 6 characters.";

    }


    if ($email == '') {

        $errors[] = "Email is required.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Please enter a valid email.";

    }


    if ($phone == '') {

        $errors[] = "Phone number is required.";

    } elseif (!preg_match('/^[0-9]+$/', $phone)) {

        $errors[] = "Phone number must contain numbers only.";

    }


    if ($facebook == '') {

        $errors[] = "Facebook URL is required.";

    } elseif (!filter_var($facebook, FILTER_VALIDATE_URL)) {

        $errors[] = "Please enter a valid Facebook URL.";

    }


    if ($twitter == '') {

        $errors[] = "Twitter URL is required.";

    } elseif (!filter_var($twitter, FILTER_VALIDATE_URL)) {

        $errors[] = "Please enter a valid Twitter URL.";

    }


    if ($instagram == '') {

        $errors[] = "Instagram URL is required.";

    } elseif (!filter_var($instagram, FILTER_VALIDATE_URL)) {

        $errors[] = "Please enter a valid Instagram URL.";

    }


    if (empty($errors)) {

        $_SESSION['user'] = [

            'username' => $username,

            'password' => $password,

            'email' => $email,

            'phone' => $phone,

            'facebook' => $facebook,

            'twitter' => $twitter,

            'instagram' => $instagram

        ];

        header('Location: index.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Account</title>

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


<div class="container account-page">

<?php if (!empty($errors)): ?>

    <div class="alert alert-danger">

        <?php foreach ($errors as $error): ?>

            <p class="mb-1">
                <?php echo $error; ?>
            </p>

        <?php endforeach; ?>

    </div>

<?php endif; ?>


<?php if (!isset($_SESSION['user'])): ?>


    <!-- Login Form -->

    <h2 class="mb-4">
        Login
    </h2>

    <form method="POST">

        <div class="form-group">

            <label>
                Email
            </label>

            <input
                type="text"
                name="email"
                class="form-control"
            >

        </div>


        <div class="form-group">

            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
            >

        </div>


        <button
            type="submit"
            name="login"
            class="btn btn-primary"
        >
            Login
        </button>

    </form>


<?php else: ?>


    <!-- Profile Form -->

    <h2 class="mb-4">
        My Profile
    </h2>

    <form method="POST">

        <div class="form-group">

            <label>
                Username
            </label>

            <input
                type="text"
                name="username"
                class="form-control"
            >

        </div>


        <div class="form-group">

            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
            >

        </div>


        <div class="form-group">

            <label>
                Email
            </label>

            <input
                type="text"
                name="email"
                class="form-control"
            >

        </div>


        <div class="form-group">

            <label>
                Phone Number
            </label>

            <input
                type="text"
                name="phone"
                class="form-control"
            >

        </div>


        <div class="form-group">

            <label>
                Facebook URL
            </label>

            <input
                type="text"
                name="facebook"
                class="form-control"
            >

        </div>


        <div class="form-group">

            <label>
                Twitter URL
            </label>

            <input
                type="text"
                name="twitter"
                class="form-control"
            >

        </div>


        <div class="form-group">

            <label>
                Instagram URL
            </label>

            <input
                type="text"
                name="instagram"
                class="form-control"
            >

        </div>


        <button
            type="submit"
            name="profile"
            class="btn btn-success"
        >
            Save Profile
        </button>

    </form>


<?php endif; ?>

</div>

</body>
</html>