<footer>
  <ul>
    <?php foreach ($site->children()->listed() as $item): ?>
      <li>
        <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</footer>
</body>
</html>