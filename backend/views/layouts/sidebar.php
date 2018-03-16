<?php

use backend\assets\BackendAsset;
use backend\models\SystemLog;
use backend\widgets\Menu;
use common\models\TimelineEvent;
use yii\bootstrap\Alert;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\log\Logger;
use yii\widgets\Breadcrumbs;

$bundle = BackendAsset::register($this);
?>

<aside class="aside-container">
    <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">

            <?php echo Menu::widget([
                'options' => ['class' => 'sidebar-nav'],
                'linkTemplate' => '<a href="{url}">{icon} <span>{label}</span>{right-icon}{badge}</a>',
                'activateParents' => true,
                'items' => [
                    [
                        'label' => Yii::t('backend', 'Main'),
                        'options' => ['class' => 'nav-heading']
                    ],
                    [
                        'label' => Yii::t('backend', 'Order'),
                        'icon' => '<i class="fa fa-times-circle"></i>',
                        'url' => ['/order/index'],
                        'active' => (Yii::$app->controller->id == 'order'),
                    ],
                    [
                        'label' => Yii::t('backend', 'Timeline'),
                        'icon' => '<i class="fa fa-times-circle"></i>',
                        'url' => ['/timeline-event/index'],
                    ],
                    [
                        'label' => Yii::t('backend', 'Content'),
                        'url' => '#pages',
                        'icon' => '<em class="fa fa-edit"></em>',
                        'template' => '<a class="collapsed" data-toggle="collapse" href="{url}" title="Content">{icon} <span>{label}</span>{right-icon}{badge}</a>',
                        'submenuTemplate' => "\n<ul id='pages' class='sidebar-nav sidebar-subnav collapse'>\n{items}\n</ul>\n",
                        'active' => in_array(Yii::$app->controller->id, ['page', 'article', 'article-category', 'widget-text', 'widget-menu', 'widget-carousel']),
                        'items' => [
                            ['label' => Yii::t('backend', 'Static pages'), 'url' => ['/page/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'page')],
                            ['label' => Yii::t('backend', 'Articles'), 'url' => ['/article/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'article')],
                            ['label' => Yii::t('backend', 'Article Categories'), 'url' => ['/article-category/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'article-category')],
                            ['label' => Yii::t('backend', 'Text Widgets'), 'url' => ['/widget-text/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'widget-text')],
                            ['label' => Yii::t('backend', 'Menu Widgets'), 'url' => ['/widget-menu/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'widget-menu')],
                            ['label' => Yii::t('backend', 'Carousel Widgets'), 'url' => ['/widget-carousel/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'widget-carousel')],
                        ],
                    ],
                    [
                        'label' => Yii::t('backend', 'System'),
                        'options' => ['class' => 'nav-heading']
                    ],
                    [
                        'label' => Yii::t('backend', 'Users'),
                        'icon' => '<em class="fa fa-users"></em>',
                        'url' => ['/user/index'],
                        'active' => (Yii::$app->controller->id == 'user'),
                        'visible' => Yii::$app->user->can('administrator')
                    ],
                    [
                        'label' => Yii::t('backend', 'Other'),
                        'url' => '#other',
                        'icon' => '<em class="fa fa-cogs"></em>',
                        'template' => '<a class="collapsed" data-toggle="collapse" href="{url}" title="Other">{icon} <span>{label}</span>{right-icon}{badge}</a>',
                        'submenuTemplate' => "\n<ul id='other' class='sidebar-nav sidebar-subnav collapse'>\n{items}\n</ul>\n",
                        'active' => in_array(Yii::$app->controller->id, ['i18n-source-message', 'i18n-message', 'key-storage', 'file-storage', 'cache', 'file-manager', 'system-information', 'log', 'rbac-auth-assignment', 'rbac-auth-item', 'rbac-auth-item-child', 'rbac-auth-rules']),
                        'items' => [
                            [
                                'label' => Yii::t('backend', 'i18n'),
                                'url' => '#i18n',
                                'icon' => '<em class="fa fa-flag"></em>',
                                'template' => '<a class="collapsed" data-toggle="collapse" href="{url}" title="i18n">{icon} <span>{label}</span>{right-icon}{badge}</a>',
                                'submenuTemplate' => "\n<ul id='i18n' class='sidebar-nav sidebar-subnav collapse'>\n{items}\n</ul>\n",
                                'active' => in_array(Yii::$app->controller->id, ['i18n-source-message', 'i18n-message']),
                                'items' => [
                                    [
                                        'label' => Yii::t('backend', 'i18n Source Message'),
                                        'url' => ['/i18n/i18n-source-message/index'],
                                        'icon' => '<em class="fa fa-angle-double-right"></em>',
                                        'active' => (Yii::$app->controller->id == 'i18n-source-message')
                                    ],
                                    [
                                        'label' => Yii::t('backend', 'i18n Message'),
                                        'url' => ['/i18n/i18n-message/index'],
                                        'icon' => '<em class="fa fa-angle-double-right"></em>',
                                        'active' => (Yii::$app->controller->id == 'i18n-message')
                                    ],
                                ]
                            ],
                            ['label' => Yii::t('backend', 'Key-Value Storage'), 'url' => ['/key-storage/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'key-storage')],
                            ['label' => Yii::t('backend', 'File Storage'), 'url' => ['/file-storage/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>', 'active' => (Yii::$app->controller->id == 'file-storage')],
                            ['label' => Yii::t('backend', 'Cache'), 'url' => ['/cache/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>'],
                            ['label' => Yii::t('backend', 'File Manager'), 'url' => ['/file-manager/index'], 'icon' => '<em class="fa fa-angle-double-right"></em>'],
                            [
                                'label' => Yii::t('backend', 'System Information'),
                                'url' => ['/system-information/index'],
                                'icon' => '<em class="fa fa-angle-double-right"></em>'
                            ],
                            [
                                'label' => Yii::t('backend', 'Logs'),
                                'url' => ['/log/index'],
                                'icon' => '<em class="fa fa-angle-double-right"></em>',
                                'badge' => SystemLog::find()->count(),
                                'badgeBgClass' => 'label-danger',
                            ],
                            [
                                'label' => Yii::t('backend', 'RBAC Rules'),
                                'url' => '#rbac',
                                'icon' => '<em class="fa fa-flag"></em>',
                                'template' => '<a class="collapsed" data-toggle="collapse" href="{url}" title="RBAC Rules">{icon} <span>{label}</span>{right-icon}{badge}</a>',
                                'submenuTemplate' => "\n<ul id='rbac' class='sidebar-nav sidebar-subnav collapse'>\n{items}\n</ul>\n",
                                'active' => in_array(Yii::$app->controller->id, ['rbac-auth-assignment', 'rbac-auth-item', 'rbac-auth-item-child', 'rbac-auth-rule']),
                                'items' => [
                                    [
                                        'label' => Yii::t('backend', 'Auth Assignment'),
                                        'url' => ['/rbac/rbac-auth-assignment/index'],
                                        'icon' => '<em class="fa fa-angle-double-right"></em>',
                                    ],
                                    [
                                        'label' => Yii::t('backend', 'Auth Items'),
                                        'url' => ['/rbac/rbac-auth-item/index'],
                                        'icon' => '<em class="fa fa-angle-double-right"></em>',
                                    ],
                                    [
                                        'label' => Yii::t('backend', 'Auth Item Child'),
                                        'url' => ['/rbac/rbac-auth-item-child/index'],
                                        'icon' => '<em class="fa fa-angle-double-right"></em>',
                                    ],
                                    [
                                        'label' => Yii::t('backend', 'Auth Rules'),
                                        'url' => ['/rbac/rbac-auth-rule/index'],
                                        'icon' => '<em class="icon-arrow-right"></em>',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
            ]) ?>


            <!-- END sidebar nav-->
        </nav>
    </div>
</aside>

