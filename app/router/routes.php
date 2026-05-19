<?php

use App\Controllers\DashboardController;
use App\Controllers\TenderController;
use App\Controllers\UserController;
use App\Controllers\WelcomeController;
use Pecee\SimpleRouter\SimpleRouter;




SimpleRouter::get('phpmvc/', [WelcomeController::class, 'index']);
SimpleRouter::get('phpmvc/user', [UserController::class, 'index']);
SimpleRouter::get('phpmvc/dashboard', [DashboardController::class, 'index']);



SimpleRouter::group(['prefix' => 'phpmvc/tender'], function () {
    SimpleRouter::get('/', [TenderController::class,'index']);
    SimpleRouter::get('/create', [TenderController::class, 'create']);
});