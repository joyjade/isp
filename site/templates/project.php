<?php snippet('nav');
  $cocreation =page('cocreation');
  $labyrinth = page('project/labyrinth');
  $archive = page('project/communityarchive');
  $tatreez = page('project/tatreez');
?>

<div class="main">
  <section class="section project">
    <div>
      <h1><?= $page->header() ?></h1>
      <p class="large">
      is a new-media project that includes designing a
        <?php snippet('piece', ['term' => 'co-creation', 'piece' => $cocreation, 'punctuation' => '']) ?>
        process with the Arab and Muslim American community in the Chicagoland area.
        This process will result in a site-specific installation that takes the form of a
        <?php snippet('piece', ['term' => 'labyrinth', 'piece' => $labyrinth, 'punctuation' => '']) ?>
        and the creation of a
        <?php snippet('piece', ['term' => 'community counter archive', 'piece' => $archive, 'punctuation' => ',']) ?>
        repurposing thousands of records collected during a decade of FBI surveillance, as a site of collective disruption and a reclaiming of narrative.
      </p>
      <!-- <?php snippet('piece', ['term' => 'center', 'piece' => $tatreez, 'punctuation' => '.'])?>  -->
    </div>
    <div class="image">
      <figure class="hidden left amber" id="cocreation">
        <img src="<?= $cocreation->image()->url() ?>" alt="">
      </figure>
      <figure class="hidden left nostalgia" id="labyrinth">
        <img src="<?= $labyrinth ->image()-> url() ?>" alt="">
      </figure>
      <figure class="hidden right moss" id="communityarchive">
        <img src="<?=  $archive ->image()-> url() ?>" alt="">
      </figure>
      <figure class="hidden right ivory" id="tatreez">
        <img src="<?=  $tatreez->image()-> url() ?>" alt="">
      </figure>
    </div>
  </section>
</div>
  
<?php snippet('footer')?>