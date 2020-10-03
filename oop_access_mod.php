<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

class Name{
    public $nama;
    private $alamat='Jepara';
    
    public static function tampilkanName(){
        echo 'hello';
    }

    public function tampilkanNama()
    {
        echo 'nama saya ferdi';
    }

    public function tampilkanAlamat(){
        return 'alamat saya'.' '.$this->alamat;
    }

}

$nama= new Name();
Name::tampilkanName();
echo PHP_EOL;
$nama->tampilkanNama();
echo PHP_EOL;
echo $nama->tampilkanAlamat();