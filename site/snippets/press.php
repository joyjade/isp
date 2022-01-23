<?php $presslinks = $press->links()->toStructure()?>
<div class="press content <?=$color?>">
  <h6 class="uppercase">
    Press
  </h6>
  <h1>
    <?= $press -> header() ?>
  </h1>
  <ul>
  <?php foreach($presslinks as $presslink) : ?>
    <li>
      <h3 class="uppercase"><?=$presslink->subheader() ?></h3>
      <h3><a href="<?=$presslink->link()?>" target="_blank"><?=$presslink->name() ?></a></h2>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
