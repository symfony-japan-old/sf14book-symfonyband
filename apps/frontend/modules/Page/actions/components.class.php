<?php
/**
* Page components.
*
* @package symfony-band
* @subpackage Page
* @author SymfonyJapan
* @version SVN: $Id: components.class.php $
*/
class PageComponents extends sfComponents
{
  /**
   * 最新のお知らせ一覧
   */
  public function executeListLatestNews()
  {
    // カテゴリ名newsに対応するページを5件取得する
    $pager = new sfDoctrinePager('Page', 5);
    $pager->setQuery(PageTable::queryLatestNews());
    $pager->setPage(1);
    $pager->init();
    $this->latestNewsPager = $pager;
  }
}
