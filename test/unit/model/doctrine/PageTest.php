<?php
include dirname(__FILE__).'/../../../bootstrap/unit.php';
new sfDatabaseManager($configuration);
Doctrine_Core::loadData(sfConfig::get('sf_data_dir').'/fixtures');
$test = new lime_test(6);

newsCountCheck($test, 5);

$title  = 'Lime Test Title';
$body   = 'Lime Test Body';
$author = '団長';

$page = new Page();
$page->setTitle($title);
$page->setBody($body);
$page->setCategory('news');
$page->setAuthor($author);
$page->save();

$testPages = PageTable::getInstance()->createQuery('p')
  ->where('p.title = ?', $title)
  ->execute();

if(count($testPages) === 1)
{
  $test->is($testPages[0]->getTitle(),  $title,  'Titleの保存取得は正常');
  $test->is($testPages[0]->getBody(),   $body,   'Bodyの保存取得は正常');
  $test->is($testPages[0]->getAuthor(), $author, 'Authorの保存取得は正常');
}
else
{
  $test->fail('Page count error.');
}

newsCountCheck($test, 6);

$page->delete();

newsCountCheck($test, 5);

function newsCountCheck($test, $num)
{
  $news = PageTable::queryLatestNews()->count();
  $test->is($num, $news, 'newsカテゴリの件数は' . $news . '件');
}
