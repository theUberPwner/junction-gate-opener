<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

$app = new Silex\Application();

$app->get('/', function () use ($app) {
  $response = new Services_Twilio_Twiml();
  $response->say('Hello');
  return $response;
});

$app->run();
