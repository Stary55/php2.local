<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 13.03.2019
 * Time: 19:01
 */

namespace App;


class Db
{
    protected $dbh;

    public function  __construct()
    {
        $this->dbh = new \PDO("mysql:host=localhost; dbname=test1","root","root");
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }

    public function query($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
            if(false !== $res){
                return $sth->fetchAll();
            }
        return [];
    }
}