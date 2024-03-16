<?php
require_once '../app/init.php';
$new = new App;

if (!session_id()) {
    session_start();
}

