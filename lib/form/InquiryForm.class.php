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
      'name'   => new sfWidgetFormInput(array(
      ), array(
        'size'         => 30,
        'maxlength'    => 20,
      )),
      'email'  => new sfWidgetFormInput(array(
      ), array(
        'size'         => 50,
        'maxlength'    => 100,
      )),
      'body'   => new sfWidgetFormTextarea(array(
      ), array(
        'cols'         => 40,
        'rows'         => 10,
      )),
      'join'   => new sfWidgetFormChoice(array(
        'choices'  => self::$joinChoices,
        'multiple' => false,
        'expanded' => true,
        'default'  => 3,
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
    $this->widgetSchema->setLabels(array(
      'name'   => 'お名前',
      'email'  => 'メールアドレス',
      'body'   => 'お問い合わせ内容',
      'join'   => '入団をご希望ですか？',
    ));
  }
}
