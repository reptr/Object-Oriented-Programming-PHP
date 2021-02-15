<?php
/**
Private = properties dan method yang ada di dalam class tidak bisa diakses di luar class tersebut.

Protected = properties dan method yang ada di dalam class  bisa diakses oleh anak class tersebut.

Public = properties dan method yang ada di dalam class  bisa diakses di luar class tersebut.
 */

 class Customer
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
 }
// instasiasi ada di 05_init.php
