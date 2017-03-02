<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;

$this->title = 'Подтверждение отзыва';
?>
   
<?php $form = ActiveForm::begin([
    'id' => 'comment-form',
    'options' => ['data-pjax' => true],
]); ?>   
    
    <div class="modal-body">
        
        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        
        <?= $form->field($model, 'date') ?>
        
        <?= $form->field($model, 'body')->textarea(['rows' => 10]) ?>
        
        <input type="text" hidden="hidden" name="Comments[id]" value="<?=$model->id?>">
        
    </div>
    <div class="modal-footer">        
        <div class="form-group">
            <?= Html::submitButton('Опубликовать', ['class' => 'btn btn-success', 'name' => 'comment-button-published']) ?>
            <?= Html::submitButton('Удалить', ['class' => 'btn btn-danger', 'name' => 'comment-button-delete']) ?>
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'comment-button-save']) ?>
            <?= Html::submitButton('Отменить', ['class' => 'btn btn-primary', 'name' => 'comment-button-cancel', 'data-dismiss' => 'modal']) ?>
        </div>
    </div>

 

<?php ActiveForm::end(); ?>