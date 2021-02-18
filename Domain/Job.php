<?php

namespace Jobstore\Domain;

// namespace Jobstore\Domain as Myjob;

class Job
{
    private static $lastId = 0;

    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
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
}
