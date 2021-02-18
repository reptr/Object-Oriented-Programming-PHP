<?php

namespace Interface\Inter;

// namespace Jobstore\Domain as Myjob;

class Book
{
    // properties itu variable (lebih gampangnya)
    public $isbn; //public = bisa diakses diluar kelas Book
    public $title;
    public $author;
    public $available;

    // construct = membuat value sebagai argument
    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
}
