<?php

namespace Tests\Unit;

use App\PrimeFactors;
use TypeError;

test('testGenerateTo10', function () {
    $primes_gen = new PrimeFactors();

    expect($primes_gen->generate(10))
        ->toBe([2, 5]);
});

test('testNonNumericString', function () {
    $primes_gen = new PrimeFactors();

    expect($primes_gen->generate('word'))
        ->toThrow(TypeError::class);
});

test('testNumericString', function () {
    $primes_gen = new PrimeFactors();

    expect($primes_gen->generate('10'))
        ->toBe([2, 5]);
});
