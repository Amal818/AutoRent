<?php


class connect extends PDO{
    const HOST = "localhost";
    const DB = "employe_gestion";
    const USER = "amal";
    const PSW = "AZ@1234560";

    public function __construct(){
        try {
            parent::__construct("mysql:dbname=".self::DB.";host=".self::HOST, self::USER, self::PSW);
        } catch (PDOException $e) {
            echo $e->getMessage()."".$e->getFile()."".$e->getLine();
        }
    }
}
try {
    $connect = new Connect();
} catch (PDOException $e) {
    echo "Error establishing database connection: " . $e->getMessage();
    die();
}

?>
