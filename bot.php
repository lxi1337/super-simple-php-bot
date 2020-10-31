<?php

use Discord\DiscordCommandClient;

$discord = new DiscordCommandClient([
  'token' => 'bot-token',
]);

$discord->on('ready', function ($discord) {
    echo "Bot is ready.", PHP_EOL;

$discord->registerCommand('!hi', function ($message) {
  return 'Hello there!';
}, [
  'description' => 'Replys with `Hello there!`',
]);

$discord->run();
