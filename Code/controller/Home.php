<?php
session_start();
unset($_SESSION["ID_voyage"]);


class Home
{

    public function index()
    {
        require_once __DIR__ . "/../view/home.php";
    }
}
