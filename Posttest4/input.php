<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    // Lakukan pemrosesan data di sini (misalnya, menyimpan data ke database atau mengirim email)
    
    // Setelah pemrosesan selesai, Anda bisa mengarahkan pengguna kembali ke halaman yang sesuai
    header("Location: thank_you_page.html");
}
?>