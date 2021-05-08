<?php

/*
reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
reflection adalah fitur yang biasanya digunakan saat kita membuat framework
*/

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = null; // kalau di comment akan error sesuai dengan kondisi exception
$request->username = "asep"; // kalau di comment akan error sesuai dengan kondisi exception
$request->password = "asep"; // kalau di comment akan error sesuai dengan kondisi exception

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $username;
    public ?string $password;
}

$register = new RegisterUserRequest();
$register->name = "asep"; // kalau di comment akan error sesuai dengan kondisi exception
$register->username = "asep"; // kalau di comment akan error sesuai dengan kondisi exception
$register->password = "password"; // kalau di comment akan error sesuai dengan kondisi exception
ValidationUtil::validateReflection($register);

// ValidationUtil::validate($register);
//   Uncaught TypeError: Argument 1 passed to ValidationUtil::validate() must be an instance of LoginRequest
// ini ga akan bisa karena dalam validate itu sendiri hanya di buat untuk params yang class nya LoginRequest
// jadi kalau dikirim objecet dari class yang lain dia akan error
