<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use common\widgets\contacts\ContactFormWidget;

/* @var $this yii\web\View */

$this->title = 'Р”РѕРІР¶РµРЅРєРѕ';

?>

<?= ContactFormWidget::widget([    
    'header' => 'Р—Р°РїРёСЃР°С‚СЊСЃСЏ РЅР° РїСЂРёС‘Рј',                
    'fields' => ['name', 'phone'],
    'modal' => true,
    'modalOptions' => [
        'id' => 'signer',
        'size' => 'modal-md',
        'modalLink' => false,
    ],
    'formOptions' => [
        'id' => 'signer-form',
        'class' => 'form-horizontal',
        'buttonText' => 'РћС‚РїСЂР°РІРёС‚СЊ',
    ]
]); ?>  

<!-- РќРѕРІРѕСЃС‚Рё -->
<div class="news animated-steps3">
    <div class="container animated-steps3-box hidden-block">
        <div class="row">
            <h2 class="text-center news_h2">РќРѕРІРѕСЃС‚Рё/РЎС‚Р°С‚СЊРё</h2>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,

                'itemView' => '_newsItemShort',

                'layout' => "{items}",

                'summaryOptions' => [
                    'tag' => 'span',
                    'class' => 'my-summary'
                ],

                'itemOptions' => [
                    'tag' => 'div',
                    'class' => 'news-item',
                ],

                'emptyText' => '<p>РЎРїРёСЃРѕРє РїСѓСЃС‚</p>',
                'emptyTextOptions' => [
                    'tag' => 'p'
                ],
            ]);
            ?>
            <div class="col-md-12 text-left">
                <?= Html::a('Р’РµСЃСЊ СЃРїРёСЃРѕРє', ['/news'], ['class' => 'news_color open-modal-1 news-all']) ?>
            </div>
        </div>
    </div>
</div>