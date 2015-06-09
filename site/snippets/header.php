<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

  <?php

  echo css('assets/css/lightbox.css');
  echo css('assets/css/main.css');

  $cssURI  = 'assets/css/' . $page->template() . '.css';
  $cssRoot = c::get('root') . '/' . $cssURI;

  echo css($cssURI);

  echo js('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
  echo js('assets/script/script.js');
  echo js('assets/script/lightbox.js');

  ?>

</head>

<body>

  <header>
      <?php snippet('menu') ?>
  </header>