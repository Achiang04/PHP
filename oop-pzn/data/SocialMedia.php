<?php

/*
final class
class yang sudah didefiniskan dengan final maka tidak akan bisa di inheritance lagi
pemakainnya cukup tambahkan keyword final sebelum class nya

final function
function yang sudah didefiniskan dengan final maka tidak akan bisa di overriding lagi
pemakainnya cukup tambahkan keyword final sebelum function nya
*/

class SocialMedia {
    public string $name;
}

final class Facebook extends SocialMedia {

}

class FakeFacebook extends Facebook {} // ini error karena class Facebook itu final udah ga bisa di inheritance lagi

class Instagram extends SocialMedia {
    final public function login(string $userName, string $password): bool {
        return true;
    }
}

class FakeInstagram extends Instagram {
    public function login(string $userName, string $password): void { 
        // ini error karena function login di instagarm itu final udah ga bisa di overriding lagi
        return false;
    }
}