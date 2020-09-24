<?php

/**
 * Throw
 */
$fn = fn () => throw new Exception();

function foo () {
    return throw new Exception();
}