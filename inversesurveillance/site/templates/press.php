<?php snippet('nav')?>



<div class="main">
  <section class="split flush">
    <div class="press content <?=$page->color()?>">
      <h6 class="uppercase">
        <?= $page->subheader()?>
      </h6>
      <h1>
        <?= $page -> header() ?>
      </h1>
      <p class="large">
        <?= $page->subtitle() ?>
      </p>
    </div>

    
    <div class="ivory">
     <?php if($cover = $page->image()) :?>
      <figure>
        <img src="<?= $cover-> url() ?>" alt="">
      </figure>
     <?php endif; ?>

    </div>
  </section>
  <section>
    <div class="ivory press">
      <ul>
      <?php $presslinks = $page->links()->toStructure();?>
      <?php foreach($presslinks as $presslink) : ?>
        <li>
          <h3 class="uppercase"><?=$presslink->subheader() ?></h3>
          <h3><a href="<?=$presslink->link()?>" target="_blank"><?=$presslink->name() ?></a></h2>
        </li>
      <?php endforeach; ?>
      </ul>
    </div>


  </section>
</div>

<?php snippet('footer')?>