<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 * 
 * PHP Version 7.3.6
  */
class Home extends \Core\Controller
{
    /**
     * Before filter
     * 
     * @return void
      */
    protected function before() 
    {
      // echo "(before) ";
      // return false;
    }

    /**
     * After filter
     * 
     * @return void
      */
    protected function after()
    {
      //echo " (after)";
    }

    /**
     * Show the index page
     * 
     * @return void
      */
    public function indexAction()
    {
      
      // Get all parkings where user is current user_id

      View::renderTemplate('Home/index.html');

    }
}