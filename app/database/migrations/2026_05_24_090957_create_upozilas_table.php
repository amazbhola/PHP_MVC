<?php

use App\Base\Schema;

Schema::create('upozilas', function ($table) {

    $table->id();
    $table->foreignId('district_id')->constrained('districts');
    $table->string('name');
    $table->timestamps();

});