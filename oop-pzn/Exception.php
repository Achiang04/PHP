<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();

// $loginRequest->username = "asep";
// $loginRequest->password = "asep";
/* 
kalau login request blm di set apa pun maka akan muncul error 
karena di validation request udah di buatin throw nya berdasarkan kondisinya masing masing
contohnya:
Uncaught ValidationException: username is null
ini kenak di validation untuk username yang msih kosong jadi bakal muncul erorr sesuai dengan yang udah di setting
*/

$loginRequest->username = "asep";
$loginRequest->password = "asep";

validateLoginRequest($loginRequest);

echo "Valid\n";

