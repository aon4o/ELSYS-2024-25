<?php

require __DIR__ . '/vendor/autoload.php';

use App\PrimeFactors;

$primes_gen = new PrimeFactors();

$primes = $primes_gen->generate(10);

foreach ($primes as $prime) {
    echo $prime . PHP_EOL;
}