<?php


class Helper
{
    private $con;
    private $db;
    private $user;
    private $passw;
    private $query;
    private $param;
    private $stmt;
    private $view;
    private $data;

    /**
     * Helper constructor.
     * @param $db
     * @param $user
     * @param $passw
     */
    public  function __construct($db, $user, $passw)
    {
        $this->db = $db;
        $this->user = $user;
        $this->passw = $passw;

        try {
            $this->con = new PDO('mysql:host=localhost;dbname=' . $this->db, $this->user, $this->passw);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (exception $e) {

            switch ($e->getCode()) {

                case 2002:
                    echo 'Verbindung zum Server nicht möglich!<br>';
                    break;
                case 1044:
                    echo 'Probleme beim Zugriff mit Benutzer: <b>' . $this->use . '</b>';
                    break;
                case 1045:
                    echo 'Passwort evt. falsch für Benutzer: ' . $this->use . '! Zugriff abgelehnt!<br>';
                    break;
                case 1049:
                    echo 'Die Datenbank <b>' . $this->db . '</b> existiert nicht!<br>';
                    break;
                default:
                    echo $e->getMessage();
            }
        }
    }

    /**
     * @param $query
     * @param null $param
     * @return bool|PDOStatement
     */
    public function getStatement($query, $param = NULL)
    {
        $this->query = $query;
        $this->param = $param;

        try {

            $this->stmt = $this->con->prepare($this->query);

            $this->stmt->execute($param);

            return $this->stmt;
        } catch (exception $e) {
            $e->getCode();
        }

    }

    /**
     * @param $view
     * @param $data
     */
    public function showView($view, $data)
    {
        $this->data = $data;
        $this->view = $view;
        $view_show = './views/'. $this->view;

        include $view_show;

    }

}