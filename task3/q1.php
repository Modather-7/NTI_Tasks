<?php

$age = $_GET['age'] ?? '';

if ($age != '') {
    if ($age >= 18) {
        echo "تمت الموافقة على تسجيل الدخول.";
    } else {
        echo "عذراً، العمر أقل من 18 سنة.";
    }
}

?>

<form>
    <input type="number" name="age" placeholder="أدخل عمرك">
    <button type="submit">إرسال</button>
</form>