<?php snippet('nav')?>
<div class="main about">
  <section class="split divider">
    <div class="content company">
        <h6 class="uppercase"><?=$page->subheader()?></h6>
        <h1><?=$page->heading()?></h1>
        <p><?=$page->description()?></p>
    </div>
    <div class="image">
      <div class="sticky">
        <figure>
          <?php if($image = $page->image()): ?>
            <img src="<?= $image->url()?>">
          <?php endif ?>
        </figure>
      </div>
    </div>
  </section>
  <section class="team">
    <h1>Meet the Team</h1>
    <ul>
      <?php if ($members = $page->team()->toStructure()):
        foreach($members as $member): ?>
        <li>
          
          <h4>
            <?php if($member->link()->isNotEmpty()) : ?>
            <a href="<?=$member->link()?>">
              <?=$member->person()?>
            </a>
            <?php else: ?>
              <?=$member->person()?>
            <?php endif ?>
          
          </h4>
          <div class="bio">
            <?=$member->bio()?>
          </div>
        </li>
      <?php endforeach; endif ?>
    </ul>
  </section>

</div>
<?php snippet('footer')?>