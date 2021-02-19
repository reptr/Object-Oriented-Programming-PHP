<?php

namespace Interface\Utils;

use Exception;

// trair connot isntiate (__construct)
trait Unique
{
    private static $lastId = 0;
    // private $id;
    protected $id;

    public function setId(int $id)
    {
        try {
            if ($id < 1) {
                throw new Exception('ID cannot be negative number !');
            }

            if ($id == null) {
                $this->id = ++self::$lastId; //self::$lastId -> cara akses static properties
            } else {
                $this->id = $id;
                if ($id > self::$lastId) {
                    self::$lastId = $id;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            echo 'Done with try-catch';
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
