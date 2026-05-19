<?php

use App\Base\Schema;

Schema::create('locations', function ($table) {

    $table->id();

    $table->timestamps();

});