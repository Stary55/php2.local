<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 13.03.2019
 * Time: 20:35
 */

namespace App\Models;
use App\Db;
use App\Model;

class User extends Model
{
    const TABLE = 'users';
     public $name;
     public $email;


}