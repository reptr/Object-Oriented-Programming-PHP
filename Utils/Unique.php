<?php

namespace Interface\Utils;

// trair connot isntiate (__construct)
trait Unique
{
    private static $lastId = 0;
    // private $id;
    protected $id;

    public function setId(int $id)
    {
        if ($id == null) {
            $this->id = ++self::$lastId; //self::$lastId -> cara akses static properties
        } else {
            $this->id = $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
        }
    }

    // acessor
    public static function getLastId()
    {
        return self::$lastId;
    }

    public function getId()
    {
        return $this->id;
    }
}
