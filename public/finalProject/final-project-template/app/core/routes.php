<?php

use app\controllers\UserController;

use app\controllers\MainController;

use app\controllers\ReservationController;

$routes = [
    'users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
    ],
    'reservations' => [
        'controller' => ReservationController::class,
        'POST' => 'submitReservation'
    ],
    '#' => [
        'controller' => MainController::class,
        'Get' => 'homepage',
    ],
    'our-story' => [
        'controller' => MainController::class,
        'GET' => 'ourStory',
    ],
    'services' => [
        'controller' => MainController::class,
        'GET' => 'services',
    ],
    'contact-us' => [
        'controller' => MainController::class,
        'GET' => 'contactUS',
    ],
    'sign-up' => [
        'controller' => MainController::class,
        'GET' => 'signUp',
    ],
    'save-contact' => [
    'controller' => signUpController::class,
    'POST' => 'saveContact',
    ],
    'dock-times' => [
    'controller' => MainController::class,
    'GET' => 'dockTimes',
]


];