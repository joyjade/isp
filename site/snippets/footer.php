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
<?= js(['assets/js/global.js', '@auto']) ?>
</body>
</html>