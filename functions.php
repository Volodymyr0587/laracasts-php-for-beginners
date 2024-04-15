<?php 

/**
 * Dump and die function.
 *
 * Displays the structured information about the given variable and terminates the script execution.
 *
 * @param mixed $value The variable to be dumped.
 * @return void
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);   
    }
}