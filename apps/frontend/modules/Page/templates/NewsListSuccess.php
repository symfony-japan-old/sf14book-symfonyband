<?php slot('breadcrumb')?>
<?php echo link_to('Symfony楽団ホームページ', 'homepage') ?> >
お知らせの一覧
<?php end_slot() ?>
<h2>お知らせの一覧</h2>
<?php if (count($pageList)): ?>
  <ul>
    <?php foreach ($pageList as $page): ?>
      <li>
        <?php echo $page->getDateTimeObject('created_at')->format('m/d') ?>
        <?php echo link_to($page->getTitle(), 'news_show', array('slug'=>$page->getSlug())) ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  お知らせはありません
<?php endif; ?>
