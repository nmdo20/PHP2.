<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
 require_once "./helper.php";


Dotenv\Dotenv::createImmutable(__DIR__)->load();
require_once __DIR__ . '/routes/index.php';