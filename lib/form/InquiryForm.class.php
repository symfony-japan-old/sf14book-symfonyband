<?php
class InquiryForm extends BaseForm
{
  public static $joinChoices = array(
      1 => '希望する',
      2 => '楽器の演奏経験はないが興味はある',
      3 => 'いいえ',
    );

  public function configure()
  {
    $this->setWidgets(array(
      'name'   => new sfWidgetFormInput(),
      'email'  => new sfWidgetFormInput(),
      'body'   => new sfWidgetFormTextarea(),
      'join'   => new sfWidgetFormChoice(array(
        'choices'  => self::$joinChoices,
      )),
    ));
    $this->setValidators(array(
      'name'   => new sfValidatorString(),
      'email'  => new sfValidatorEmail(),
      'body'   => new sfValidatorString(),
      'join'   => new sfValidatorChoice(array(
        'choices' => array_keys(self::$joinChoices),
       )),
    ));
    $this->widgetSchema->setNameFormat('inquiry[%s]');
  }
}
