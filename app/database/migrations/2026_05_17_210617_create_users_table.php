<?php

use App\Base\Schema;

Schema::create('users', function ($table) {

    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('password');
    $table->timestamps();

});