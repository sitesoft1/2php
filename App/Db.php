<?php


namespace App;


class Db
{
    protected $dbh;
    
    function __construct()
    {
        echo 'Hellow Db<br>';
        $this->dbh = new \PDO('mysql:host=localhost;dbname=2-php', 'root', '');
    }
    
    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $rezult = $sth->execute();
        return $rezult;
    }
}