<?php

namespace Jobstore\Domain;

// namespace Jobstore\Domain as Myjob;

class Job extends Person //extend Class Person
{
    private static $lastId = 0;

    private $id;

    //ambil %firstname & $surname properties dari class person di parent::__construct()
    // private $firstname;
    // private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
        // ambil properties pda construct dari class Person
        parent::__construct($firstname, $surname);

        // $this->id = $id;

        if ($id == null) {
            $this->id = ++self::$lastId; //self::$lastId -> cara akses static properties
        } else {
            $this->id == $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
        }

        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    // acessor
    public static function getLastId()
    {
        return self::$lastId;
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

    // method utk override, jika ada yg sama pada parent & child, maka yg child akan jadi prioritas.
    // parent = Person
    // child = Job
    public function sayHi()
    {
        return 'Howdy '.$this->firstname.' '.parent::sayHi(); //parent::sayHi() ->ambil method sayHi pada parent (class Person)
    }
}
