<?php
$host = "127.0.0.1"; // أو اسم الخادم الخاص بك
$username = "root";   // اسم مستخدم قاعدة البيانات
$password = "";       // كلمة مرور قاعدة البيانات
$database = "project"; // اسم قاعدة البيانات التي أنشأتها

$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    echo "Error connecting to MySQL: " . mysqli_connect_error();
    exit();
}
?>