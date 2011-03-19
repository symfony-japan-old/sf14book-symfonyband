<?php

/**
 * Page actions.
 *
 * @package    symfonyband
 * @subpackage Page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $param1 = $request->getParameter('param1');
    echo $param1; // foo
    $param2 = $request->getParameter('param2');
    echo $param2; // bar
  }

  public function executeShow(sfWebRequest $request)
  {
    // スラグパラメータを取得し、スラグからページを取得する
    $slug = $request->getParameter('slug');
    $this->page = PageTable::getInstance()->findOneBySlug($slug);
  }

  public function executeNewsShow(sfWebRequest $request)
  {
    // スラグパラメータを取得し、スラグからページを取得する
    $slug = $request->getParameter('slug');
    $this->page = PageTable::getInstance()->findOneBySlug($slug);
  }

  public function executeNewsList(sfWebRequest $request)
  {
    // カテゴリ名newsに対応するページの一覧を取得する
    $this->pageList = PageTable::getInstance()->findByCategory('news');
  }
}