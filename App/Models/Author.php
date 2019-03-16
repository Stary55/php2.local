<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 16.03.2019
 * Time: 19:36
 */

namespace App\Models;
use App\Db;
use App\Model;

class Author extends Model
{
    const TABLE = 'Authors';
     public $name;
     public $id;
}