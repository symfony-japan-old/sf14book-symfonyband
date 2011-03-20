<?php
include(dirname(__FILE__).'/../../bootstrap/functional.php');
$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/page/about')->

  with('request')->begin()->
    isParameter('module', 'Page')->    // (1)
    isParameter('action', 'Show')->    // (2)
  end()->
  with('response')->begin()->
    isStatusCode(200)->                // (3)
    isHeader('content-type', 'text/html; charset=utf-8')-> // (4)
    checkElement('h2', 'Symfony楽団について')->            // (5)
  end()
;
