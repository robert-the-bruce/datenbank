<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Datenbank</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Robert Salchegger">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mystyles.css">
    <link rel="stylesheet" href="./css/skeleton.css">
</head>

<body>
    <nav>
        <?php include 'navigation.php'; //Menu?>
    </nav>
    <div class="mysite">
    <?php //include 'config.php'; //Datenbankanbindung
        include_once './vendor/helper.php';

    if (isset($_GET['seite']))
    {
        switch ($_GET['seite']) //routing
        {
            case 'start':
                include './src/start.php';
                break;
            default:
                include './src/helloworld.php';
        }
    }
    ?>
    </div>
</body>


</html>



