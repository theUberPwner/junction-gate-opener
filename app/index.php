<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config.php';

$app = new Silex\Application();

$app->get('/', function () use ($app) {
  $response = new Services_Twilio_Twiml();
  $response->say('Hello');
  $response->play(TONE_BASE_URL . '/dtmf-9.mp3', array('loop' => 2));
  return $response;
});

$app->run();
