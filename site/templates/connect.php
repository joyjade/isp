
<?php snippet('nav')?>

<div class="main">
  <section class="split flush">
    <?php snippet('connect', ['contact' => $page, 'color' => 'ivory']) ?>
    <div>  
      <?php if($cover = $page->image()) :?>
       <figure>
         <img src="<?= $cover-> url() ?>" alt="">
       </figure>
      <?php endif; ?>
    </div>
  </section>
</div>

<?php snippet('footer')?>