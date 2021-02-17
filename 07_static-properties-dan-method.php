<?php
// import class
require_once __DIR__.'/07_job.php'; // import class job dengan static properties

// intasiasi
$job_satu = new Job(1, 'Boddie', 'Bod', 'bodie@mail.test');
$job_dua = new Job(null, 'Bobie', 'Bob', 'bobie@mail.test');
// $job_tiga = new Job(5, 'Joey', 'Jo', 'Joey@mail.test');

// var_dump($job_satu->getFirstName());
// var_dump($job_satu->getSurName());
// var_dump($job_satu->getFullName());
// var_dump($job_satu->setEmail('Momon@mail.test'));
// var_dump($job_satu->getEmail());

/**
 * static properties dan method.
 *
 * sejauh ini semua properties dan method terhubung ke intasiasi
 * dua instasiasi yang berbeda dapat menghasilkan nilai yg berbeda pada property yang sama
 *
 * php allow untuk mempunyai multiple properties dan method yang terhubung pada class nya sendiri daripada ke object
 */

// var_dump($job_satu::getLastId());
// var_dump($job_dua);

// ada dua cara menggunakan static properties tanpa harus instasiasi
// 1. referensi menggunakan intansi yang ada

// $job_satu::getLastId();
echo $job_dua::getLastId();
echo '<br>';

// 2. referensi menggunakan class namenya sendiri
echo Job::getLastId();
