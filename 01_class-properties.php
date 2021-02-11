<?php

/**
 * Class Book
 * desc: mengenai class dan properties
 */
class Book {
    // tiga visibilitas = public, private, protected

    // properties
    public $isbn; //public = bisa diakses diluar kelas Book
    public $title;
    public $author;
    public $available;

}

// instance => bisa dikatakan menggunakan, bisa digunakan (re-use) many time (kapan pun)
$harry_potter = new Book(); //instance kelas Book
$harry_potter->isbn = 123891723981738;
$harry_potter->title = 'Harry Potter Santuy';
$harry_potter->author = 'Mr. she';
$harry_potter->available = 10;

var_dump($harry_potter); //show data