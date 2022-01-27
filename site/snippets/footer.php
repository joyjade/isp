<footer>
  <ul>
    <?php foreach ($site->children()->listed() as $item): ?>
      <li>
        <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
  <img src="/assets/icons/isp.svg" alt="" class="footer-logo">
</footer>
<?= js(['assets/js/headroom.js', 'assets/js/global.js', '@auto']) ?>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</body>
</html>