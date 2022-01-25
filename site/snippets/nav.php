<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inverse Surveillance Project</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <?= css(['assets/css/global.css', '@auto', 'assets/css/mobile.css']) ?>
</head>
<body>
  <nav>
    <div class="title">
      <a href="<?= $site->url() ?>"><img src="/assets/icons/isp_horizontal_2.png" alt=""></a>
    </div>
  </nav>
  <div class="menu">
    <img src="/assets/icons/eye_open.svg" alt="" class="eye wide">
    <img src="/assets/icons/eye_halfopen.svg" class="eye half" alt="">
    <img src="/assets/icons/eye_closed.svg" class="eye closed" alt="">
  </div>
  <div class="drawer ivory">
    <ul>
      <li>
        <a href="/">Home</a>
      </li>
      <?php foreach ($site->children()->listed() as $item): ?>
        <li>
          <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
        <?php endforeach ?>
    </ul>
  </div>
  