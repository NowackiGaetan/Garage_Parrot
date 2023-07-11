<?php
session_start();
$_SESSION = [];
session_destroy();
header('location: http://localhost/garageparrot/');
