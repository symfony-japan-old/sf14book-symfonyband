<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <div class="container_12">
          <div class="grid_12">
            <h1><?php echo link_to('Symfony楽団公式サイト', 'homepage') ?></h1>
          </div>
          <div id="menu">
            <div class="grid_12">
              <ul>
                <li><?php echo link_to('トップ', 'homepage') ?></li>
                <li><?php echo link_to('Symfony楽団について', 'page_show', array('slug'=>'about')) ?></li>
                <li><?php echo link_to('お知らせ', 'news_list') ?></li>
                <li><?php echo link_to('メンバー募集', 'page_show', array('slug'=>'joinus')) ?></li>
                <li><?php echo link_to('お問い合わせ',  'inquiry_new') ?></li>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div id="main">
        <div class="container_12">
          <div class="grid_3">
            <div id="left">
              <p>新着情報一覧</p>
            </div>
          </div>
          <div class="grid_9">
            <div id="right">
              <?php echo $sf_content ?>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div id="footer">
        <div class="container_12">
          <div class="grid_12">
            <p>Copyright (C) 2011 Symfony楽団</p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </body>
</html>
