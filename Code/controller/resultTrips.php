<?php
session_start();


class Home
{

    public function index()
    {
        require_once __DIR__ . "/../view/home.php";
    }
}
