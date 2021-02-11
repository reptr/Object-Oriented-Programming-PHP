<?php

/**
 * class Book
 * desc: Mengenai magic method (construct)
 */
class Book {
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

    // method adalah function (lebih gampangnya)
    public function getPrintTitle()
    {
       $result = $this->title. ' by ' . $this->author ; // $this -> me-representasikan objek, yaitu objeknya class Book

        if(!$this->available) {
            $result .= 'Not Availabel!';
        }

        return $result;
    }

    // method yg lain
    public function getCopy()
    {
        if($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }
}

// instance => bisa dikatakan menggunakan, bisa digunakan (re-use) many time (kapan pun)
// $harry_potter = new Book(); //instance kelas Book
// $harry_potter->isbn = 123891723981738;
// $harry_potter->title = 'Harry Potter Santuy';
// $harry_potter->author = 'Mr. she';
// $harry_potter->available = 0;

// instance class Book. karena sudah menggunakan __cosntruct, tinggal isi saja sesuai argument
$harry_potter = new Book(123891723981738, 'Harry Potter Santuy', 'Mr. she', 10);

// akses method getCopy() pada instance class Book
if($harry_potter->getCopy()) { //jika return true
    echo 'Ini adalah copy dari ' . $harry_potter->title . '<br>';
} else { //jika return false
    echo 'Maaf, sudah abis gan !'.'<br>';
}

var_dump($harry_potter); //show data