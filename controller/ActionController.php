<?php
ini_set("display_errors", true);
ini_set("display_startup_errors", true);
error_reporting(E_ALL);

/**
 *
 */
function show()
{
    echo "Hi " . htmlspecialchars($_POST['name']) . ".";

    echo "You are {$_POST['age']} years old.";
}

if ( isset($_POST["action"]) )
{
    print_r($_POST);
    // clicked();
    $_POST["action"]();
}