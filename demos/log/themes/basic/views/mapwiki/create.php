<div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'text'); ?>
<?php echo CHtml::activeTextArea($model,'text'); ?>
</div>
 
<div class="row submit">
<?php echo CHtml::submitButton('Войти'); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->