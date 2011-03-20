<?php
include(dirname(__FILE__).'/../../bootstrap/functional.php');
$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/page/about')->

  with('request')->begin()->
    isParameter('module', 'Page')->
    isParameter('action', 'Show')->
  end()->
  with('response')->begin()->
    isStatusCode(200)->
    isHeader('content-type', 'text/html; charset=utf-8')->
    checkElement('h2', 'Symfony楽団について')->
    checkElement('#author', 'Symfony楽団長')->             // (6)
  end()
;
