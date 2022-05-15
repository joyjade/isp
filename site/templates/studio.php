<?php snippet('nav')?>
<div class="main">
  <section class="split flush banner m-reverse">
    <div class="content <?= $page->banner_color() ?>">
      <h6 class="uppercase"><?= $page->subheader() ?></h6>
      <h1 class="large"><?=$page ->title() ?></h1>
      <p class="large">
        <?= $page -> description() ?>
      </p>
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
    <h3 class="header">Upcoming Events</h3>
    <ul class="upcoming">
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
            <h2><?= $event-> title()?> </h2>
            <div class="details">
              <p><?= $event-> start_time()->toDate('g:i a')?> - <?= $event-> end_time()->toDate('g:i a')?></p>  
              <p><?= $event-> date()->toDate('l, F d, Y')?></p>  
            </div>
            <p><?= $event-> short_description()?></p>  
            </a>
          </div>
        </li>    
      <?php endforeach ?>
    </ul>
    <br><br><br>
    <h3 class="header">Past Events</h3>
    <ul class="past">
    <?php $events = $page -> children() -> listed(); foreach($events as $event): ?>
        <li>
          <a href="<?=$event -> url() ?>">
            <h2><?= $event-> title()?> </h2>
            <p><?= $event-> date()->toDate('l, F d, Y')?></p>  
          </a>
        </li>    
      <?php endforeach ?>
    </ul>
  </section>
  <section class="split flush">
    <div class=" <?= $page -> purpose_color() ?> content">
      <div class="sticky">
        <h1>
          <span>
            <?= $page->purpose_header()?>    
          </span>
        </h1>
        <p class="large">
          <?= $page->purpose_description()?>    
        </p>
        <img class="inline-arrow" src="/assets/icons/arrow.svg" alt="">
      </div>
      <figure class="tatreez-bg">
        <img src="/assets/icons/pixels_square_2.svg" alt="" class="tatreez-icon m-hide">
      <figure class="tatreez-bg">
    </div>
    <div class="ivory content">
      <ul class="color-blocks">
        <?php 
          if ($purpose = $page -> purpose()->toStructure()):
          foreach($purpose as $value) :?>
          <li class="">
            <h3><?=$value->value()?></h3>
            <p><?=$value->explanation()?></p>
          </li>
        <?php endforeach; endif; ?>
      </ul>
    </div> 
  </section>
</div>
<?php snippet('footer')?>