<?php
/**
 * Created by PhpStorm.
 * User: Раян
 * Date: 17.03.2019
 * Time: 17:28
 */

namespace App\controllers;
use App\View;

class News
{
        protected $view;
        public function __construct()
        {
            $this->view = new View();
        }

        public function action($action)
        {
            $methodName = 'action'.$action;
            return $this->$methodName();
        }
        public function beforeAction()
        {
            echo "Fuck you";
        }

        protected function actionIndex()
      {
          $this->beforeAction();
          $this->view->title = 'Мой крутой сайт';
          $this->view->users = \App\Models\User::findAll();
          $this->view->news = \App\Models\News::findAll();

          $this->view->display(__DIR__.'/../templates/index.php');
      }
}