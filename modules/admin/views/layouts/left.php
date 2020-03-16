<?php

use app\modules\feedback\forms\CallbackForm;
use app\modules\feedback\helpers\Badge;
use dmstr\widgets\Menu;

?>

<aside class="main-sidebar">
    <section class="sidebar">
        <?= Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'encodeLabels' => false,
                'items' => [
                    [
                        'label' => 'Главная',
                        'icon' => 'home',
                        'url' => Yii::$app->getHomeUrl(),
                    ],
                    [
                        'label' => 'Страницы',
                        'icon' => 'files-o',
                        'url' => ['/page/backend/default/index'],
                        'active' => Yii::$app->controller->module->id == 'page',
                    ],
                    [
                        'label' => 'Заявки' . Badge::getSumBadge(),
                        'icon' => 'bell-o',
                        'url' => ['/feedback/backend/default/index', 'type' => CallbackForm::TYPE],
                        'active' => Yii::$app->controller->module->id == 'feedback',
                    ],
                    [
                        'label' => 'Настройки',
                        'icon' => 'cogs',
                        'items' => [
                            [
                                'label' => 'Настройки',
                                'icon' => 'cog',
                                'url' => ['/setting/backend/default/index'],
                                'active' => Yii::$app->controller->module->id == 'setting',
                            ],
                            [
                                'label' => 'Пользователи',
                                'icon' => 'users',
                                'url' => ['/user/backend/index'],
                                'active' => Yii::$app->controller->module->id == 'user',
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>
    </section>
</aside>
