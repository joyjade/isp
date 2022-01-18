<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inverse Surveillance Project</title>
</head>
<body>
  <nav>
    <div>
      <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </div>
    <?php foreach ($site->children()->listed() as $item): ?>
      <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    <?php endforeach ?>
  </nav>
  