<?php slot('breadcrumb')?>
<?php echo link_to('Symfony楽団ホームページ', 'homepage') ?> >
お問い合わせ
<?php end_slot() ?>
<?php echo $form->renderFormTag(url_for('inquiry_new')) ?>
<table>
<?php echo $form; ?>
</table>
<input type="submit" name="submit" value="送信" />
</form>
