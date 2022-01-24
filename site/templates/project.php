<?php snippet('nav');
  $cocreation =page('cocreation');
  $labyrinth = page('project/labyrinth');
  $archive = page('project/counterarchive');
  $tatreez = page('project/tatreez');
?>

<div class="main">
  <section class="section project">
    <div>
      <h1><?= $page->header() ?></h1>
      <p class="large">
        is an interactive new media installation coming to Bridgeview, IL. 
        <?php snippet('piece', ['term' => 'Co-created', 'piece' => $cocreation, 'punctuation' => '']) ?>
        with the local Arab and Muslim communities and a team of 
        artists led by Assia Boundaoui, the installation will take the form of a forty-foot 
        <?php snippet('piece', ['term' => 'labyrinth', 'piece' => $labyrinth, 'punctuation' => ',']) ?>
        guiding participants through an immersive AR 
        <?php snippet('piece', ['term' => 'counter archive', 'piece' => $archive, 'punctuation' => '']) ?>
        and a communal arts  
        <?php snippet('piece', ['term' => 'center', 'piece' => $tatreez, 'punctuation' => '.']) ?> 
      </p>
    </div>
    <div class="image">
      <figure class="hidden left amber" id="cocreation">
        <img src="<?= $cocreation->image()->url() ?>" alt="">
      </figure>
      <figure class="hidden right nostalgia" id="labyrinth">
        <img src="<?= $labyrinth ->image()-> url() ?>" alt="">
      </figure>
      <figure class="hidden left moss" id="counterarchive">
        <img src="<?=  $archive ->image()-> url() ?>" alt="">
      </figure>
      <figure class="hidden right ivory" id="tatreez">
        <img src="<?=  $tatreez->image()-> url() ?>" alt="">
      </figure>
    </div>
  </section>
</div>
  
<?php snippet('footer')?>