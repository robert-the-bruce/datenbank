<?php

$db = '';
$user = 'root';
$pass = '';

try
{
    $con = new PDO('mysql:host=localhost;dbname=' . $db, $user, $pass);

} catch (exception $e)
{
    switch ($e->getCode()) {

        case 1049:
            echo "irgendwas";
            break;
        case 1111:
            echo "wieder was";
            break;
        case 999:
            echo "und schon wider";
            break;
        default:
            echo "keine Verbindung zur Datenbank";
    }


}