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
        is a new-media project that includes designing and producing a
        <?php snippet('piece', ['term' => 'co-creation', 'piece' => $cocreation, 'punctuation' => '']) ?>
        process with with the Arab and Muslim American community in the Chicagoland area.  This process will result in a site specific installation and the creation of a community counter-archive. 
        The project will repurpose thousands of FBI documents collected during a decade of state surveillance, as a site of collective disruption and a reclaiming of narrative. 
        <br/><br/>
        The installation will take the shape of a 50-foot
        <?php snippet('piece', ['term' => 'labyrinth', 'piece' => $labyrinth, 'punctuation' => ',']) ?>
        displaying 33,000 redacted documents from the FBI’s “Operation Vulgar Betrayal.” Augmented reality is the vehicle that triggers the
        <?php snippet('piece', ['term' => 'community counter archive', 'piece' => $archive, 'punctuation' => '']) ?>
        and gives access to fragments of collective memory and emotional truths — in the form of family home videos and photographs shared by the community — buried within the redacted spaces of the government’s official record. 
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