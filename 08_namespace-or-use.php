<?php

/**
 * Jka mempunyai dua class yg namanya sama, PHP tidak aka tahu yg mana yang telah di rujuk (refered).
 *
 * untuk solve msalah ini, PHP allow dengan menggunakan namespace 'keyword'
 * setiap section namespace dipisahkan oleh \
 */

 /**
  * sebelum menggunakan namespace satu hal yg dicatat.
  * bahkan namespace & file path biasanya sama
  * ini tidak dibutuhkan, sebagai Developer kita bisa memaksa (enforce) namespace.
  */

// use
// use Jobstore\Domain\Job;

use Jobstore\Domain\Job;

// import class
require_once __DIR__.'/Domain/Job.php';

/** instasiasi */
$job_satu = new Job(1, 'Boddie', 'Bod', 'bodie@mail.test');
$job_dua = new Job(null, 'Bobie', 'Bob', 'bobie@mail.test');

// $job_satu::getLastId();
echo $job_dua::getLastId();
echo '<br>';

// 2. referensi menggunakan class namenya sendiri
echo Job::getLastId();
