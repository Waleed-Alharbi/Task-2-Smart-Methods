<?php
include 'db.php';

if (isset($_POST['id'])) {
    $id = (int)$_POST['id'];

    // اجلب الحالة الحالية
    $result = $conn->query("SELECT status FROM users WHERE id = $id");
    $row = $result->fetch_assoc();
    $current = $row['status'];

    // عكس القيمة (0 ↔ 1)
    $new_status = $current == 1 ? 0 : 1;

    // حدث القيمة
    $conn->query("UPDATE users SET status = $new_status WHERE id = $id");

    echo $new_status;
}
?>
