<?php


class ValidationUtil {
    // tanpa reflection
    // kita harus membuat banayak validate untuk setiap request nya
    // jadinya akan ada banyak banget function validate nya 
    // dan akan jadi kurang efektif

    // static function valdiateLogin(LoginRequest $request) {
    //     if (!isset($request->username)) {
    //         throw new ValidationException("username is null");
    //     } else if (!isset($request->password)) {
    //         throw new ValidationException("password is null");
    //     } 
    // }

    // static function validateRegister(LoginRequest $request) {
    //     if (!isset($request->username)) {
    //         throw new ValidationException("username is null");
    //     } else if (!isset($request->password)) {
    //         throw new ValidationException("password is null");
    //     } 
    // }

    // =================================================================

    // tanpa reflection

     static function validate(LoginRequest $request) {
        if (!isset($request->username)) {
            throw new ValidationException("username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationException("password is not set");
        }  else if (is_null($request->username) == "") {
            throw new Exception("username is null");
        }   else if (is_null($request->password) == "") {
            throw new Exception("password is null");
        } 
    }

    /* 
    with reflection
    tidak perlu menyebutkan tipe class di paramsnya
    karena di reflection dia bisa langsung tau params yang dikirim nya ituu dari class yang mana dengan function ReflectionClass();
    dan reflection juga bisa get semua properties yang ada di dalam class itu dengan function getProperties();
    */

    static function validateReflection($request) {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set - reflection\n");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null  - reflection\n");
            }
        }
    }
}