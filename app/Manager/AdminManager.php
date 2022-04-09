<?php

require '../class/Admin.php';

class AdminManager
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=contact_portfolio', 'root');
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die;
        }
    }
}