<div class="contact container ivory">
  <figure class="tatreez-bg">
    <img src="/assets/icons/pixels_square_3.svg" alt="" class="tatreez-icon">
  </figure>
  <div class="content">
    <h1><?=$contact-> header()?></h1>
    <?php if(!$home && $contact->hide()->bool()) :?>
      <div>
        <h3><?=$contact-> section_header()?></h3>
        <?= $contact -> section_body() ?>
      </div>
    <?php endif ?>
    <div>
      <h3><?=$contact-> follow_header()?></h3>
      <?= $contact -> social() ?>
    </div>

    <?php snippet('mailchimp') ?>
  </div>
</div>