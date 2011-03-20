<?php slot('breadcrumb')?>
<?php echo link_to('Symfony楽団ホームページ', 'homepage') ?> >
<?php echo $page->getTitle() ?>
<?php end_slot() ?>
<div id="content">
  <h2><?php echo $page->getTitle() ?></h2>
  <p><?php echo nl2br($page->getRawValue()->getBody()) ?></p>
  <div id="author"><?php echo $page->getAuthor() ?></div>
</div>
