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
use yii\jui\DatePicker;
use vova07\imperavi\Widget;

$this->title = 'Подтверждение отзыва';
?>
   
<?php $form = ActiveForm::begin([
    'id' => 'comment-form',
    'options' => ['data-pjax' => true],
]); ?>
    
    <div class="modal-body">
        
        <div class="row">
            <div class="col-sm-6"><b>Дата создания:</b> <?= $model->date_create ?></div>
            <div class="col-sm-6"><b>Дата изменения:</b> <?= $model->date_update ?></div>
            <div class="col-sm-12">
                <?= $form->field($model, 'date_published')->widget(DatePicker::classname(), [
                        'language' => 'ru',
                        'dateFormat' => 'yyyy-MM-dd',
                    ]); ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-8">
                <?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'active')->checkbox() ?>
            </div>
        </div>
        
        <?php if (!$model->isNewRecord) echo $form->field($model, 'alias') ?>
        
        <?= $form->field($model, 'preview')->textarea(['rows' => 5]) ?>
        
        <?= $form->field($model, 'text')->widget(Widget::className(), [
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 200,
                'plugins' => [
                    'clips',
                    'fullscreen'
                ]
            ]
        ]); ?>
        
        <input type="text" hidden="hidden" name="News[id]" value="<?=$model->id?>">
        
    </div>
    <div class="modal-footer">        
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'news-button-save']) ?>
            <?php if (!$model->isNewRecord) echo Html::submitButton('Удалить', ['class' => 'btn btn-danger', 'name' => 'news-button-delete']) ?>
            <?= Html::submitButton('Отменить', ['class' => 'btn btn-primary', 'name' => 'news-button-cancel', 'data-dismiss' => 'modal']) ?>
        </div>
    </div>

 

<?php ActiveForm::end(); ?>