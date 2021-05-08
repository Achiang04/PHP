
<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();

$loginRequest->username = "asep"; 
$loginRequest->password = "asep";

$loginRequest->username = "    "; 
$loginRequest->password = "    ";

// kondisi kalau error yang di keluarin beda
try {
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Validation Error: {$exception->getMessage()}\n";
} catch (Exception $exception) {
    echo "Error: {$exception->getMessage()}\n";
}

// kondisi kalau error yang di keluarin sama
// bisa di persingkat

try {
    validateLoginRequest($loginRequest);
    // ketika try ada error maka akan langsung di tangkap oleh catch maka dari itu code yang ada dibawah nya si error
    // ga akan di eksekusi lagi
    // hanya akan di eksekusi selama ga ad error
    echo "VALID\n";
} catch (ValidationException | Exception $exception) {
    echo "Error: {$exception->getMessage()}\n";

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "mau error atau enggak tetap akan dipanggil\n";
}


echo "oi\n";

// getTrace = berisikin informasi dari excepton yang terjadi, seperti lokasi file, baris keberapa
// function ini sangat cocok untuk melakukan debugging pada exception