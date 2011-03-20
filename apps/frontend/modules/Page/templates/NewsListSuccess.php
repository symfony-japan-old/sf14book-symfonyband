<?php slot('breadcrumb')?>
<?php echo link_to('Symfony楽団ホームページ', 'homepage') ?> >
お知らせの一覧
<?php end_slot() ?>
<h2>お知らせの一覧</h2>
<?php if ($pager->getNbResults()): ?>
  <ul>
    <?php foreach ($pager->getResults() as $page): ?>
      <li>
        <?php echo $page->getDateTimeObject('created_at')->format('m/d') ?>
        <?php echo link_to($page->getTitle(), 'news_show',  array('slug'=>$page->getSlug())) ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  お知らせはありません
<?php endif; ?>
