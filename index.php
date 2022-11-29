<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

  case '':
  case '/':
    require __DIR__ . '/home.php';
    break;

  case '/about':
    require __DIR__ . '/about.php';
    break;

  case '/services':
    require __DIR__ . '/services.php';
    break;

  case '/contact':
    require __DIR__ . '/contact.php';
    break;
  case '/services':
    require __DIR__ . '/services.php';
    break;

  case '/cropgap':
    require __DIR__ . '/cropgap.php';
    break;

  case '/farm-monitor':
    require __DIR__ . '/farm-monitor.php';
    break;

  case '/farm-lord':
    require __DIR__ . '/farm-lord.php';
    break;

  case '/farm-enrollment':
    require __DIR__ . '/farm-enrollment.php';
    break;

  case '/our-space':
    require __DIR__ . '/our-space.php';
    break;

  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}
