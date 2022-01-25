<?php snippet('nav')?>
<div class="main about">
  <section class="split divider">
    <div class="content">
      <h6 class="uppercase"><?=$page->subheader()?></h6>
      <h1><?=$page->heading()?></h1>
      <h4>Watched Film LLC</h4>
      <p><?=$page->llc()->kirbytext() ?></p>
      <h4>The Feeling of Being Watched</h4>
      <p><?=$page->film()->kirbytext() ?></p>
    </div>
    <div class="image">
      <figure class="sticky">
        <?php if($image = $page->image()): ?>
          <img src="<?= $image->url()?>">
        <?php endif ?>
      </figure>
    </div>
  </section>
  <section class="team">
    <h1>Meet the Team</h1>
    <ul>
      <?php if ($members = $page->team()->toStructure()):
        foreach($members as $member): ?>
        <li>
          <h4><?=$member->person()?></h4>
          <div class="bio">
            <?=$member->bio()->kirbytext()?>
          </div>
        </li>
      <?php endforeach; endif ?>
    </ul>
  </section>

</div>
<?php snippet('footer')?>