<?php
require __DIR__ . '/vendor/autoload.php';

use AHT\Controllers\HomeController;
use AHT\Repositories\HomeRepository;
use AHT\Customize\HomeCustomize;

$homeCtrl = new HomeController;
$homeRps = new HomeRepository;
$homeCus = new HomeCustomize;

print_r($homeCtrl->actionIndex());
$homeRps->hello(); // Hello - vì đã được load thành công
$homeCus->sayMyName();
?>