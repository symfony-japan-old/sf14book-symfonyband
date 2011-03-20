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
            <?php include_partial('global/Header') ?>
          </div>
          <div id="menu">
            <div class="grid_12">
              <?php include_partial('global/Menu') ?>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div id="main">
        <div class="container_12">
          <div class="grid_3">
            <div id="left">
              <?php include_component('Page', 'ListLatestNews') ?>
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
            <?php include_partial('global/Footer') ?>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </body>
</html>
