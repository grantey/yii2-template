<?php
/**
 *  
    'header' => @string //заголовок формы
    'fields' => ['name', 'phone', 'email', 'time', 'text'] //поля формы
    'modal' => true //показать в модальном окне
    'modalOptions' => ['id' => @string, 'size' => 'modal-md', 'modalLink' => true, 'modalTag' => 'a', 'modalLabel' => 'Заказать обратный звонок', 'modalLabelClass' => 'open-modal-1'] //параметры модального окна
 *  'formOptions' => ['id' => @string, 'class' => 'form-horizontal'], 
 *  //если modalLink = true, будет выведена ссылка на модальное окно
 *  //иначе прописывать в виде <a class="{modalLabelClass}" data-toggle="modal" data-target="#{id}">{modalLabel}</a>
 */

namespace common\widgets\contacts;

use Yii;
use yii\base\Widget;
use common\widgets\contacts\models\ContactForm;

class ContactFormWidget extends Widget
{
    public $header;
    public $fields;
    public $modal;
    public $modalOptions;
    public $formOptions;
    
    public function init()
    {
        parent::init();
        //ob_start();
    }

    public function run()
    {
        $model = new ContactForm();
        
        //$content = ob_get_clean();
        return $this->render('contactform', [
                'model' => $model,
                'header' => $this->header,
                'fields' => $this->fields,
                'modal' => $this->modal,
                'modalOptions' => $this->modalOptions,
                'formOptions' => $this->formOptions,
            ]
        );
    }
}