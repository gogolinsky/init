<?php

use app\modules\setting\components\Settings;
use yii\helpers\Html;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html class="html" lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="format-detection" content="telephone=no"/>
        <meta property="og:type" content="website">
        <meta property="og:image" content="/img/share.png">
        <meta property="og:description" content="">
        <meta property="og:locale" content="ru_RU">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <?= Settings::getRealValue('meta_tags') ?>
        <?php $this->head() ?>
    </head>
    <body class="body js-body">
    <script>document.querySelector('.js-body').classList.add('js-init');</script>

    <?php $this->beginBody() ?>

    <?= $content ?>

    <?= Settings::getRealValue('metrika_code') ?>
    <?= Settings::getRealValue('analitics_code') ?>
    <?= Settings::getRealValue('callback_code') ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>