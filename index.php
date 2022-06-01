<?php

require 'kirby/bootstrap.php';

$sites = [
  'inversesurveillance.com' => 'inversesurveillance.com'
];

$host = Url::host();
$root = $sites[$host];
$url  = 'http://' . $host;

$kirby = new Kirby([
  'roots' => [
    'index'   => __DIR__,
    'site'    => $root . '/site',
    'content' => $root . '/content',
    'media'   => $root . '/media',
    'assets'  => $root . '/assets'
  ],
  'urls' => [
    'media'  => $url . '/' . $root . '/media',
    'assets' => $url . '/' . $root . '/assets',
  ],
]);

echo $kirby->render();

echo (new Kirby)->render();
