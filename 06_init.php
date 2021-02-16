<?php
// import class
require_once __DIR__.'/06_encapsulation_accessors-mutators.php'; //import class dengan property public

// intasiasi
$job_satu = new Job(1, 'Boddie', 'Bod', 'bodie@mail.test');

// var_dump($job_satu->getFirstName());
// var_dump($job_satu->getSurName());
var_dump($job_satu->getFullName());
var_dump($job_satu->setEmail('Momon@mail.test'));
var_dump($job_satu->getEmail());
