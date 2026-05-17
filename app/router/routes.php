<?php

use Pecee\SimpleRouter\SimpleRouter;



SimpleRouter::get('phpmvc/', function() {
    return 'Hello world';
});