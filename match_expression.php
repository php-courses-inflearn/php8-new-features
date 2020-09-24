<?php

/**
 * Match Expression
 */
$message = match (400) {
    400 => 'Bad Reqeust',
    200, 201, 202, 203 => 'Ok',
    500 => 'Internal Server Error',
    default => 'Hello, World'
};

// UnhandledMatchError
// match (200) { 400 => 'Bad Reqeust' };
