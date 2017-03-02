<?php

use frontend\assets\SideAsset;
use yii\widgets\ListView;

SideAsset::register($this);

/* @var $this yii\web\About */

$this->title = 'Новости Довженко';

?>

<div class="container news-list">
    <h1>Наши новости</h1>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,

        'itemView' => '_newsItemLong',

        'layout' => "{items}\n{pager}\n{summary}",
        'summary' => '<div class="news-summary">Показано {count} из {totalCount}</div>',
        'summaryOptions' => [
            'tag' => 'span',
            'class' => 'my-summary'
        ],

        'itemOptions' => [
            'tag' => 'div',
            'class' => 'news-item',
        ],

        'emptyText' => '<p>Список пуст</p>',
        'emptyTextOptions' => [
            'tag' => 'p'
        ],

        'pager' => [
            'firstPageLabel' => 'Первая',
            'lastPageLabel' => 'Последняя',
            'nextPageLabel' => 'Следующая',
            'prevPageLabel' => 'Предыдущая',        
            'maxButtonCount' => 5,
        ],
    ]);
    ?>

</div>

<hr />
<?= $this->render('_contactsPhone'); ?>