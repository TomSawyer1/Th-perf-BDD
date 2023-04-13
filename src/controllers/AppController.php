<?php
//que pour l'index
class AppController
{

    public static function index()
    {

        include VIEWS . "app/home.php";
    }
    public static function tab_user()
    {

        include VIEWS ."admin/admin.php";
    }

}
