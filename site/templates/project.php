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
        is an interactive new media installation 
        <?php snippet('piece', ['term' => 'co-created', 'piece' => $cocreation, 'punctuation' => '']) ?>
        with the Arab and Muslim American communities in the Chicagoland area.
        The project will repurpose thousands of FBI documents collected during a decade of surveillance, as a site of collective disruption and a reclaiming of narrative. 
        The installation will take the shape of a 40-foot 
        <?php snippet('piece', ['term' => 'labyrinth', 'piece' => $labyrinth, 'punctuation' => ',']) ?>
        displaying 33,000 redacted documents from Operation Vulgar Betrayal and using augmented reality will bring a 
        <?php snippet('piece', ['term' => 'community counter archive', 'piece' => $archive, 'punctuation' => '']) ?>
         consisting of fragments of collective memory and dreams in the form of archival home videos to life. 
      </p>
      <!-- <?php snippet('piece', ['term' => 'center', 'piece' => $tatreez, 'punctuation' => '.'])?>  -->
    </div>
    <div class="image">
      <figure class="hidden left amber" id="cocreation">
        <img src="<?= $cocreation->image()->url() ?>" alt="">
      </figure>
      <figure class="hidden right nostalgia" id="labyrinth">
        <img src="<?= $labyrinth ->image()-> url() ?>" alt="">
      </figure>
      <figure class="hidden right moss" id="counterarchive">
        <img src="<?=  $archive ->image()-> url() ?>" alt="">
      </figure>
      <figure class="hidden left ivory" id="tatreez">
        <img src="<?=  $tatreez->image()-> url() ?>" alt="">
      </figure>
    </div>
  </section>
</div>
  
<?php snippet('footer')?>