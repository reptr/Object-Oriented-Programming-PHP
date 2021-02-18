<?php

/**
 * Interface.
 *
 * OOP element grup yg berisi set fungsi deklarasi tanpa implementing.
 *
 * Interface berbeda dgn abstract class dimana interface tdk bisa ada sedikit implementation. sedangkan abstract clas boleh mix method definition & implemented ones.
 *
 * dari sudut pandang developer, menggunakan class yang  implements interface seperti writing a contract
 *
 * pastikan bahwa class akan punya method yg  sudah dideklarasi pada interface,
 * regardless implementation.
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

function checkIfValid(Customer $customer, $books)
{
    return $customer->getAmountToBorrow() >= count($books);
}

/** instasiasi */
// $harry_potter1 = new Book(123891723981738, 'Harry Potter Santuy', 'J.K. Rowling', 10);
// $harry_potter2 = new Book(123891723981738, 'Harry Potter Santuy', 'J.K. Rowling', 10);
// $harry_potter3 = new Book(123891723981738, 'Harry Potter Santuy', 'J.K. Rowling', 10);
// $harry_potter4 = new Book(123891723981738, 'Harry Potter Santuy', 'J.K. Rowling', 10);
// $harry_potter5 = new Book(123891723981738, 'Harry Potter Santuy', 'J.K. Rowling', 10);
$cust_satu = new Basic(1, 'Boddie', 'Bod', 'bodie@mail.test');
$cust_dua = new Premium(2, 'MOBB', 'MOb', 'mobb@mail.test');

// var_dump(checkIfValid($cust_satu, [$harry_potter1]));
var_dump(checkIfValid($cust_satu, [$harry_potter1, $harry_potter2, $harry_potter3, $harry_potter4]));
var_dump($cust_satu->getType());
var_dump($cust_satu->getFirstname());
var_dump($cust_satu->pay(100.000));

var_dump($cust_dua->getType());
var_dump($cust_dua->getFirstname());
var_dump($cust_dua->pay(800, 0000));
