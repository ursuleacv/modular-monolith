<?php

require __DIR__.'/vendor/autoload.php';

use Kangaroo\PackageOne\ExamplePackageClass as PackageOneClass;
use Kangaroo\PackageTwo\ExamplePackageClass as PackageTwoClass;

// Example package from the main composer (packagist.org)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$s3_bucket = $_ENV['S3_BUCKET'];
//$s3_bucket = $_SERVER['S3_BUCKET'];

echo $s3_bucket;

echo '<br>';

// This is a local package using composer path
$ob = new PackageOneClass();

echo $ob->hello();

echo '<br>';
$ob->decodeJson();

echo '<br>';

// This is a local package using autoload
$ob = new PackageTwoClass();

echo $ob->hello();
