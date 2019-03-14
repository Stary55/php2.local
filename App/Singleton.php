<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 14.03.2019
 * Time: 16:53
 */

namespace App;


abstract class Singleton
{

        public $counter;
        protected static $instance;
        protected function __construct()
        {
        }
        public static function instance()
        {
            if(null === self::$instance){
                static::$instance = new static;
            }
            return static::$instance;
        }
}