<?php

class Student {
    public string $id;
    public string $name;
    public string $value;
    private string $sample;

	function setSample($sample) {  
		$this->sample = $sample; 
	} 

  
}


class Student2 {
    public string $id;
    public string $name;
    public string $value;
    private string $sample;

	function setSample($sample) {  
		$this->sample = $sample; 
	} 

    public function __clone() {
        unset($this->sample);
    }
  
    // parsing object to string
    public function __toString(): string {
        return "id: $this->id, name : $this->name, value $this->value";
    }

    // untuk buat function variable 
    // jadi ketika sebuah variable yang nampung object ini dipanggil seolah olah function maka __invoke ini yang bakal kepanggil
    public function __invoke(...$arguments): void {
        $join = join(",", $arguments);
        echo "invoke student iwth arguments $join" . PHP_EOL;
    }

    /*
    sebelumnya kita sering melakukan debug variable pake function var_dump()
    function var_dump() sebenarnya memanggil function __debugInfo();
    jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
    intinya kalau mau memodifikasi output var_dump 
    itu bsia dibuat kek gini
    */
    public function __debugInfo(): array {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "bambang",
        ];
    }
}