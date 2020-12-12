<?php

$gitmojis = json_decode(file_get_contents('data.json'))->gitmojis;

foreach ($gitmojis as $key => $value) {
  if (strpos($value->emoji, $query) === 0) {
    echo $value->code;
  }
}
