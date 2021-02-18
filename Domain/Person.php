<?php

namespace Jobstore\Domain;

class Person
{
    protected $firstname;
    protected $surname;

    public function __construct($firstname, $surname)
    {
        $this->firstname = $firstname;
        $this->surname = $surname;
    }

    // method
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    // method utk override, jika ada yg sama pada parent & child, maka yg child akan jadi prioritas.
    // parent = Person
    // child = Job
    public function sayHi()
    {
        return 'Hello '.$this->firstname;
    }
}
