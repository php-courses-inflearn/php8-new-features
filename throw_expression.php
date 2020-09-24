<?php

/**
 * Throw Expression
 */
$fn = fn () => throw new Exception();

function foo() {
    return throw new Exception();
}
