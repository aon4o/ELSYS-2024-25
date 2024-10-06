<?php

/**
 * Function for input validation.
 * @param string $input
 * @return bool
 */
function validate_year(string $input): bool
{
    $int_input = (int) $input;

    if ($int_input <= 0) {
        return false;
    }

    return true;
}
