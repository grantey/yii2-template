<?php
/**
 * 
 * 
 */

use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;

$this->title = 'Погашение онлайн';
//$this->params['breadcrumbs'][] = $this->title;

$modal ? $isModal = '1' : $isModal = '0';    

$script = <<< JS
    $('form#{$formOptions["id"]}').on('beforeSubmit', function(e) {
        var form = $(this);        
        $.post(
            form.attr("action"),            
            form.serialize()
        )
            .done(function (data) {
                console.log(data);
                form.trigger('reset');
                //$.pjax.reload({container:"#contact-form-container"});
                if (data) {
                    if (!{$isModal}) {
                        $('#{$formOptions["id"]}-modal').modal('show');
                        $('#{$formOptions["id"]}-success-modal').show();
                    }
                    else {                        
                        $('#{$formOptions["id"]}-success').show();
                    }
                }
                else {
                    if (!{$isModal}) {
                        $('#{$formOptions["id"]}-modal').modal('show');
                        $('#{$formOptions["id"]}-danger-modal').show();
                    }
                    else {                        
                        $('#{$formOptions["id"]}-danger').show();
                    }
                }
            })
            .fail(function () {
                alert('Ошибка отправки');
            });                
    return false;        
    });
    $('input[id={$formOptions["id"]}-phone]').mask("+7 (999) 999-99-99");
JS;

$this->registerJs($script, yii\web\View::POS_READY);
?>

    <?php
    if ($modal) {
        if ($modalOptions['modalLink']) {
            Modal::begin([
                'id' => $modalOptions['id'],
                'size' => $modalOptions['size'],
                'toggleButton' => ['tag' => $modalOptions['modalTag'], 'label' => $modalOptions['modalLabel'], 'class' => $modalOptions['modalLabelClass']],
            ]); 
        }
        else {
            Modal::begin([
                'id' => $modalOptions['id'],
                'size' => $modalOptions['size'],            
            ]); 
        }        
    }
    ?>
    <?php //\yii\widgets\Pjax::begin(['id' => 'contact-form-container']); ?>
    <?php $form = ActiveForm::begin([
        'id' => $formOptions['id'],
        'action' => ['site/sendform'],
        'options' => ['class' => $formOptions['class']],
        'fieldConfig' => [
            'template' => "<div class=\"col-sm-12\">{input}</div>\n<div class=\"col-sm-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-sm-3 control-label'],
        ],
    ]); ?>

        <div class="modal-body">
            
            <div class="modal-form-header"><?=$header?></div>
            
            <?php
            foreach ($fields as $field) {
                
                switch($field) {
                    case 'name': echo $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя']); break;
                    case 'phone': echo $form->field($model, 'phone')//->widget(\yii\widgets\MaskedInput::className(), ['mask' => '+7(999) 999-99-99'])
                            ->textInput(['placeholder' => 'Ваш телефон', 'id' => $formOptions['id'].'-phone']); break;
                    case 'email': echo $form->field($model, 'email')->textInput(['placeholder' => 'E-mail']); break;
                    case 'time': echo $form->field($model, 'time')->textInput(['placeholder' => 'Время звонка']); break;
                    case 'text': echo $form->field($model, 'text')->textarea(['rows' => 6, 'placeholder' => 'Сообщение']); break;
                    default: break;
                }
            } 
            ?>

            <div class="hidden">
                <?= $form->field($model, 'header')->textInput(['value' => $header]); ?>
            </div>            
            
            <?= Html::submitButton($formOptions['buttonText'], ['class' => 'button button-primary', 'name' => 'support-button']); ?>
        </div>
    <?php ActiveForm::end();
    
    //\yii\widgets\Pjax::end(); ?>
    <div class="contact-form-alerts">
        <div class="alert alert-success" id="<?=$formOptions["id"]?>-success">Спасибо за обращение!</div>
        <div class="alert alert-danger" id="<?=$formOptions["id"]?>-danger">Ошибка при отправке сообщения</div>
    </div>
    
    <div id="<?=$formOptions["id"]?>-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>            
                </div>
                <div class="modal-body">
                    <div class="contact-form-alerts contact-form-alerts-modal">
                        <div class="alert alert-success" id="<?=$formOptions["id"]?>-success-modal">Спасибо за обращение!</div>
                        <div class="alert alert-danger" id="<?=$formOptions["id"]?>-danger-modal">Ошибка при отправке сообщения</div>
                    </div>         
                </div>
            </div>
        </div>
    </div>

    <?php if ($modal) {
        Modal::end(); 
    }
    ?>
