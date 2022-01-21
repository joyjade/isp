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
      <h6><?=$presslink->subheader() ?></h6>
      <h2><a href="<?=$presslink->link()?>"><?=$presslink->name() ?></a></h2>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
