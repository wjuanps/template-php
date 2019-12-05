<?php

$users = App::get('database')->selectAll('users');

require_once 'views/index.view.php';
