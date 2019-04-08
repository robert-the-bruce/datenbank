<?php

if (isset($_POST['showtab']))

{
    $datenbank = $_POST['datenbank'];

    $db = new Helper($datenbank, 'root', '' );

    $query = 'show tables;';

    $stmt = $db->getStatement($query);

    $rows = $stmt->fetchAll();

    include './views/tabellen.php';



} elseif(isset($_POST['showcol']))
{
    $datenbank= $_POST['datenbank'];
    $tabelle = $_POST['tabelle'];

    $db = new Helper($datenbank, 'root', '' );

    $query = 'describe ' . $tabelle;

    $stmt = $db->getStatement($query);

    $rows = $stmt->fetchAll();

    $array = ['mandant_id', 'cp_id', 'charge_log_id', 'chargelog_id'];
    $arguments = [
        'mandant_id' => 1,
        'cp_id' => '2',
        'charge_log_id' => 3,
        'chargelog_id' => '4'
    ];

    foreach ($array as $item) {
        if (array_key_exists($item, $arguments)){
            $arguments[$item] = intval($arguments);
        }
    }

    include './views/columns.php';


} else {

    try {

        $db = new Helper('', 'root', '' );

        $query = 'show databases;';

        $stmt = $db->getStatement($query);

        $rows = $stmt->fetchAll();

        include './views/datenbank.php';


    } catch (exception $e) {
        $e->getMessage();
    }
}
