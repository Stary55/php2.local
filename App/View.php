<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 15.03.2019
 * Time: 19:31
 */

namespace App;


class View
{
        protected $data = [];
        public function __set($name, $value)
        {
              $this->data[$name] = $value;
        }

        public function __get($name)
        {
            return $this->data[$name];
        }

        public function display($template)
        {
                include $template;
        }
}