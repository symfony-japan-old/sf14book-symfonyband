<h3>お知らせ一覧</h3>
<?php if ($latestNewsPager->getNbResults()): ?>
  <ul>
    <?php foreach ($latestNewsPager->getResults() as $page): ?>
      <li>
        <?php echo $page->getDateTimeObject('created_at')->format('m/d') ?>
        <?php echo link_to($page->getTitle(), 'news_show', array('slug'=>$page->getSlug())) ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  お知らせはありません
<?php endif; ?>
