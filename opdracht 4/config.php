<?php

class config {
    public static function connect()
    {
        $host = "localhost"
        $username = "root"
        $password = ""
        $dbname = "login_example"

        try {
            $con = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

        } catch (PDOExeption $e) {
            echo "Verbinding gefaald" . $e->get_message();
        }

        return $con;


    }
}


?>