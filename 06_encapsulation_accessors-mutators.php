<?php

// encapsulation - accessor - mutators

/**
 * private = sangat baik untuk maintenance struktur internal class
 * sebagai developer, kita dapat mengubah struktur internal tanpa mempengaruhi externall code (contohnya: class lain yang me- extend )
 * cara read atau mengubah private properties atau method dari luar class atau class lain
 * kita bisa menggunakan getters dan setters (method ini dikenal juga dengan accessor).
 */

class Job
{
    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    // acessor - getters
    public function getFirstName()
    {
        return $this->firstname;
    }

    // acessor - getters
    public function getSurName()
    {
        return $this->surname;
    }

    // acessor - getters
    public function getFullName()
    {
        return strtoupper($this->firstname.' '.$this->surname);
    }

    // acessor - getters
    public function getEmail()
    {
        return $this->email;
    }

    // acessor - setters
    public function setEmail(string $email)
    {
        return $this->email = $email;
    }
}
