<?php snippet('nav')?>


<?php $presslinks = $page->links()->toStructure()?>

<div class="main">
  <section class="split flush">
    <div class="moss content">
      <h2>
        <?= $page -> title() ?>
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
    <div class="ivory">
     <?php if($cover = $page->image()) :?>
      <figure>
        <img src="<?= $cover-> url() ?>" alt="">
      </figure>
     <?php endif; ?>

    </div>
  </section>
</div>

<?php snippet('footer')?>