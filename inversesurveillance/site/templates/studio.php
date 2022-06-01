<?php snippet('nav')?>
<div class="main studio">
  <section class="split flush banner">
    <div class="content <?= $page->banner_color() ?>">
      <h6 class="uppercase"><?= $page->subheader() ?></h6>
      <h1 class="large"><?=$page ->title() ?></h1>
      <?= $page -> description() ?>
    </div>
    <div>
      <figure>
        <?php if($image = $page->banner_image()->toFile()): ?>
          <img src="<?= $image->url() ?>">
        <?php endif ?>
      </figure>
    </div>
  </section>
  <section class="padded events">
    <ul>
      <!-- <h1>Programming</h1> -->
      <?php $events = $page -> children() -> listed(); foreach($events as $event): ?>
        <li>
          <div class="image">
            <a href="<?=$event -> url() ?>">
            <?php if($photo = $event->event_image()->toFile()) :?>  
              <img src="<?= $photo->url() ?>" alt="<>">
            <?php endif ?></a>
          </div>
          <div class="copy">
            <a href="<?=$event -> url() ?>">
              <h4 class="header">
                <?=$event -> date()?>
              </h4>
            <h2><?= $event-> title()?> </h2>
            <div class="details">
              <p><?= $event-> days_times() ?></p>  
            </div>
            <p><?= $event-> short_description()?></p>  
            </a>
          </div>
        </li>    
      <?php endforeach ?>
    </ul>
    <br><br><br>
  </section>
</div>
<?php snippet('footer')?>