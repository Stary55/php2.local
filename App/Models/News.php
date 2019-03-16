<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 16.03.2019
 * Time: 20:01
 */

namespace App\Models;


use App\Model;

class News extends Model
{
    const TABLE = 'news';
    public $title;
    public $lead;
    public $athor_id;
}