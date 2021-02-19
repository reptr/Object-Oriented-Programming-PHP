<?php

/**
 * Polymorphism - is OOP feature utk class berbeda yang implement interface yang sama.
 */

// use Interface\Inter\Book;
use Interface\Inter\Customer;
use Interface\Inter\Customer\Basic;
use Interface\Inter\Customer\Premium;

// autoloadr function utk auto load class
function autoloader($classname)
{
    $lastSlash = strpos($classname, '\\') + 1; /**  \\ = \ (back slash pertama) -> tandaya cari \, \ (back slash kedua) -> tandanya kita ingin hapus*/
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname); /**  \\ = \ (back slash pertama) -> tandaya cari \, \ (back slash kedua) -> tandanya kita ingin replcae dengan '/' */
    $filename = __DIR__.'/'.$directory.'.php';

    require_once $filename;
}

// import class
// require_once __DIR__.'/Domain/Job.php';

spl_autoload_register('autoloader');

// cek jika valid
function checkIfValid(Customer $customer, $books)
{
    return $customer->getAmountToBorrow() >= count($books);
}

// function process payment, contoh polymorphism
function processPayment(Payer $payer, float $amount)
{
    if ($payer->isExtentOfTaxes()) {
        return 'Youre Lucky ..';
    } else {
        $amount *= 1.20;
    }

    $payer->pay($amount);
}

/** instasiasi */
$cust_satu = new Basic(1, 'Boddie', 'Bod', 'bodie@mail.test');
$cust_dua = new Premium(2, 'MOBB', 'MOb', 'mobb@mail.test');

// var_dump(checkIfValid($cust_satu, [$harry_potter1]));
var_dump(checkIfValid($cust_satu, [$harry_potter1, $harry_potter2, $harry_potter3, $harry_potter4]));
var_dump($cust_satu->getType());
var_dump($cust_satu->getFirstname());
var_dump($cust_satu->pay(100.000));

// var_dump($cust_dua->getType());
// var_dump($cust_dua->getFirstname());
// var_dump($cust_dua->pay(800, 0000));
var_dump(processPayment($cust_satu, 100));
