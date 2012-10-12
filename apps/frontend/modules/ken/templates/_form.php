<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('ken/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

    <ul>
      <?php echo $form['category_id']->renderRow() ?>
      <?php echo $form['type']->renderRow() ?>
      <?php echo $form['objet']->renderRow() ?>
      <?php echo $form['supplement']->renderRow() ?>      
      <?php echo $form['etat']->renderRow() ?>
      <?php echo $form['prix']->renderRow() ?>      
      <?php echo $form['devise']->renderRow() ?>
      <?php echo $form['debattre']->renderRow() ?>
      <?php echo $form['pays']->renderRow() ?>
      <?php echo $form['ville']->renderRow() ?>            
      <?php echo $form['email']->renderRow() ?>
      <?php echo $form['tel1']->renderRow() ?>           
      <?php echo $form['tel2']->renderRow() ?>                 
      <?php echo $form['image']->renderRow() ?>     
      <?php echo $form['captcha']->renderRow(array('class' => 'captcha')) ?>                       
      <?php echo $form['_csrf_token']->render() ?>
    </ul>

    <input class="submit" type="submit" value="<?php echo __('Valider') ?>" />

&nbsp;<a id="retour" href="<?php echo url_for('ken/index') ?>"><?php echo __('Retour au kens') ?></a>

<?php if (!$form->getObject()->isNew()): ?>
  &nbsp;<?php echo link_to('Delete', 'ken/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
<?php endif; ?>

</form>
