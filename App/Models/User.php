<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 13.03.2019
 * Time: 20:35
 */

namespace App\Models;
use App\Db;

class User
{
     public $name;
     public $email;

     public static function findAll()
     {
         $db = new Db();
          return $db->query("SELECT * FROM users", 'App\Models\User');
     }
}