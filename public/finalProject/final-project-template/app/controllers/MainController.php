<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
                include '../public/assets/views/main/homepage.php';
        //$this->view('../public/assets/views/main/example-homepage.php', true);
    }

    public function notFound()
    {
    }
    // New method for About Us page
    public function ourStory()
    {
        include '../public/assets/views/main/aboutUs.php';
    }

    public function services()
    {
        include '../public/assets/views/main/services.php';
    }
    public function contactUs()
    {
        include '../public/assets/views/main/contactUs.php';
    }
    public function signUp()
    {
        include '../public/assets/views/main/signUp.php';
    }
    public function dockTimes()
    {
        include '../public/assets/views/main/dockTimes.php';
    }
}