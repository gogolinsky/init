<?php

use yii\widgets\Breadcrumbs;

/**
 * @var \yii\web\View $this
 * @var string $content
 */

?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

    <?= Breadcrumbs::widget([
        'itemTemplate' => "<li class='breadcrumb__item'>{link}</li>",
        'activeItemTemplate' => "<li class='breadcrumb__item'>{link}</li>",
        'options' => ['class' => 'breadcrumb'],
        'homeLink' => false,
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>

    <?= $content ?>

<?php $this->endContent() ?>
