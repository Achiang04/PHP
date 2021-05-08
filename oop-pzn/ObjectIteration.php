<?php

/*
object iteration = saat kita membuat object dari sebuah class, kita bisa melalukan itrasi ke semua properties yang terdapat
di object tersebut menggunkan forEach
secara default, hanya properties ynag public yang bisa diakses oleh forEach
*/

class Data  {
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";
}

$data = new Data();

foreach($data as $key => $value) {
    echo "$key : $value\n";
}

/*
jika ingin menangai iterasi secara manual itu bisa menggunakan iterator
namun iterator itu sendiri cukup ribet 
nah ada turunan nya yang lebih mudah yaitu arrayIterator
jadi dia akan gunakan array sebagai data iterasi nya 

dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface iteratorAggregate, disana kita hanya butuh
mengoverride function getIterator() yang mengemablikan data iterator
*/

echo "========================================================\n";

class Data2 implements IteratorAggregate {
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";

    public function getIterator() {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ];

        return new ArrayIterator($array);
    }
}

$data2 = new Data2();

foreach($data2 as $key => $value) {
    echo "$key : $value\n";
}

echo "========================================================\n";

// dengan yield iterator
class Data3 implements IteratorAggregate {
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";

    public function getIterator() {
       yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}

$data3 = new Data3();

foreach($data3 as $key => $value) {
    echo "$key : $value\n";
}