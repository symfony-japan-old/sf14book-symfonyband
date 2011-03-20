<ul>
  <li><?php echo link_to('トップ', 'homepage') ?></li>
  <li><?php echo link_to('Symfony楽団について', 'page_show', array('slug'=>'about')) ?></li>
  <li><?php echo link_to('お知らせ', 'news_list') ?></li>
  <li><?php echo link_to('メンバー募集', 'page_show', array('slug'=>'joinus')) ?></li>
  <li><?php echo link_to('お問い合わせ', 'inquiry_new') ?></li>
</ul>
