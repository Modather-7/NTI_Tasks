<?php

$message = '';
$total = 0;
$discount = 0;
$finalPrice = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    if (!is_numeric($price) || !is_numeric($quantity)) {
        $message = "من فضلك أدخل أرقام فقط.";
    } elseif ($price < 0 || $quantity < 0) {
        $message = "لا يمكن إدخال أرقام سالبة.";
    } else {
        $total = $price * $quantity;

        if ($total < 1000) {
            $discount = 10;
        } else {
            $discount = 15;
        }

        $discountValue = $total * ($discount / 100);
        $finalPrice = $total - $discountValue;
    }
}
?>

<form method="POST">

    <label>Product Price:</label>
    <input type="number" name="price" step="0.01">

    <br><br>

    <label>Quantity:</label>
    <input type="number" name="quantity">

    <br><br>

    <button type="submit">Calculate</button>

</form>

<?php

if ($message != '') {

    echo "<p>$message</p>";

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "Total Price: " . $total . "<br>";
    echo "Discount: " . $discount . "%<br>";
    echo "Final Price: " . $finalPrice;
}
?>