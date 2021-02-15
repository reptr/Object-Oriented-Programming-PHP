<?php
// import class
require_once __DIR__.'/05_book.php'; // import class dengan property public
require_once __DIR__.'/05_public-and-private-visibility.php'; //import class dengan property private

// instansiasi
$harry_potter = new Book(123891723981738, 'Harry Potter Santuy', 'J.K. Rowling', 10);

$customer_satu = new Customer(1, 'Hombre', 'Homb', 'hombre@mail.test');

// var_dump($harry_potter);
var_dump($customer_satu);
