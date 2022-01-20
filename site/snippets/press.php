<?php $presslinks = $press->links()->toStructure()?>
<div class="press content <?=$color?>">
  <h2>
    <?= $press -> title() ?>
  </h2>
  <ul>
  <?php foreach($presslinks as $presslink) : ?>
    <li>
      <h6><?=$presslink->subheader() ?></h6>
      <h2><a href="<?=$presslink->link()?>"><?=$presslink->name() ?></a></h2>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
