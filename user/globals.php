<?php

global $base_url;

$base_url = trim('http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']), 'user/') . '/';

$logo = $base_url . 'Loreal Pakistan Logo.png';
