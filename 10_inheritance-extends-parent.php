<?php

/**
 * Inheritance - extends / parent. utk menggunakkan parent mehod.
 */

use Jobstore\Domain\Job;

// autoloadr function utk auto load class
function autoloader($classname)
{
    $lastSlash = strpos($classname, '\\') + 1; /**  \\ = \ (back slash pertama) -> tandaya cari \, \ (back slash kedua) -> tandanya kita ingin hapus*/
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname); /**  \\ = \ (back slash pertama) -> tandaya cari \, \ (back slash kedua) -> tandanya kita ingin replcae dengan '/' */
    $filename = __DIR__.'/'.$directory.'.php';

    require_once $filename;
}

// import class
// require_once __DIR__.'/Domain/Job.php';

spl_autoload_register('autoloader');

// echo $lastSlash;
// echo $classname;
// echo $directory;

/** instasiasi */
$job_satu = new Job(1, 'Boddie', 'Bod', 'bodie@mail.test');
$job_dua = new Job(null, 'Bobie', 'Bob', 'bobie@mail.test');

// $job_satu::getLastId();
echo $job_dua::getLastId();
echo '<br>';

// 2. referensi menggunakan class namenya sendiri
echo Job::getLastId();
echo '<br>';

var_dump($job_dua);
