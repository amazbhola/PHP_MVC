<?php

use App\Base\Schema;

Schema::create('districts', function ($table) {

    $table->id();
    $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade');
    $table->string('name');
    $table->timestamps();

});