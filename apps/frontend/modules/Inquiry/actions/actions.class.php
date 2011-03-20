<?php

/**
 * Inquiry actions.
 *
 * @package    symfonyband
 * @subpackage Inquiry
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InquiryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeNew(sfWebRequest $request)
  {
    $form = new InquiryForm();
    if ($request->isMethod(sfRequest::POST))
    {
      $form->bind($request->getParameter($form->getName()));
      if ($form->isValid())
      {
        $this->redirect('Inquiry/Complete');
      }
    }
    $this->form = $form;
  }
}
