<?php snippet('nav')?>

<div class="">
  <div class="section banner">
    <img src="/assets/icons/isp.svg" alt="" class="centered-logo">
    <div class="newsletter"></div>
    <?php if($image = $page->image('banner_1.jpg')): ?>
      <img class="banner-img" src="<?= $image->url() ?>">
    <?php endif ?>
  </div>
  <section class="split flush divider">
    <div class="content">
      <div class="sticky">
        <h2>
          <?= $page -> heading() ?>
        </h2>
      </div>
    </div>
    <div class="content wide">
      <div class="sticky">
        <h3>During the five year investigation</h3>
        <p>
          of surveillance in her community documented in the award winning film, 
          <a href="">THE FEELING OF BEING WATCHED (2018)</a>,
           Assia sought to disrupt government secrecy and took the FBI to federal court to compel them to make the records they collected about her community public.
        </p>
        <br>
        <h3>In the process of making the film, </h3>
        <p>
          Assia filed a FOIA lawsuit against the FBI and won. A federal judge compelled the DOJ to release over 33,000 documents related to the FBI's surveillance of her community. The Inverse Surveillance Project will repurpose these documents as a site of collective disruption and a reclaiming of narrative.
        </p>
        <br>
        <h3>The overwhelming response from the community</h3>
        <p>
          1) address and heal from the harm of years of stifling paranoia and violent surveillance and 2) use this experience to courageously build community power through the arts, fuel our drive to undertake this project.
        </p>
      </div>
    </div>
  </section>
  <!-- <section class="flush statement amber">
    <div class="content ">
      <p class="large">
      The overwhelming response from the community to 1) address and heal from the harm of years of stifling paranoia and violent surveillance and 2) use this experience to courageously build community power through the arts, fuel our drive to undertake this project.
      </p>
    </div>
  </div> -->
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/project')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/cocreation')]) ?>
  <?php snippet('section', ['class' => 'divider', 'section' => page('home/film')]) ?>
  <section class="split">
    <?php snippet('press', ['press' => page('press'), 'color' => 'moss']) ?>
    <div class="ivory content contact">
      <h6></h6>
      <h1>Contact</h1>
      <p><?=$page->contact()->kirbytext() ?></p>
    </div>
  </section>

  
  <div class="split section">

  </div>
  <div class="split section"></div>
</div>

<?php snippet('footer')?>