<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
            'style' => 'background-color:#d9edf7;font-size:16px;font-weight:bold;font-family: Times New Roman',

        ],
    ]);
    $menuItems = [
        ['label' => 'ГБОУ Гимназия №190 Центрального района Санкт-Петербурга', 'url' => ['/site/index']],
        ['label' => 'Новости', 'url' => ['/site/about']],
        ['label' => 'Основные сведения об образовательной организации', 'url' => ['/site/about'],
                'options'=>['class'=>'dropdown'],
			    'template' => '<a href="{url}" class="url-class">{label}</a>',
			    'items' => [
				    ['label' => 'Основные сведения', 'url' => ['services/juridical-services']],
				    ['label' => 'Структура и управление образовательной организацией', 'url' => ['services/valuation-services']],
                    ['label' => 'Документы', 'url' => ['services/juridical-services']],
                    ['label' => 'Образование', 'url' => ['services/juridical-services']],
                    ['label' => 'Образовательные стандарты', 'url' => ['services/juridical-services']],
                    ['label' => 'Руководство.Педагогический состав.', 'url' => ['services/juridical-services']],
                    ['label' => 'Материально-техническое обеспечение и оснащенность образовательного процесса', 'url' => ['services/juridical-services']],
                    ['label' => 'Стипендии и иные виды материальной поддержки', 'url' => ['services/juridical-services']],
                    ['label' => 'Платные образовательные услуги', 'url' => ['services/juridical-services']],
                    ['label' => 'Финансово-хозяйственная деятельность', 'url' => ['services/juridical-services']],
                    ['label' => 'Вакантные места для приема-перевода', 'url' => ['services/juridical-services']],
			]
		],
        ['label' => 'ГИА', 'url' => ['/site/about']],
//        ['label' => 'Историческая справка', 'url' => ['/site/about']],
//        ['label' => 'Информационные сборники ГБОУ гимназия №190', 'url' => ['/site/contact']],
//        ['label' => 'Электронный дневник', 'url' => ['/site/contact']],
//        ['label' => 'Воспитательная служба', 'url' => ['/site/contact']],
//        ['label' => 'Школьная медиация', 'url' => ['/site/contact']],
//        ['label' => 'Кафедра живописи и рисунка', 'url' => ['/site/contact']],
//        ['label' => 'Наши выпускники', 'url' => ['/site/contact']],
//        ['label' => 'Инновационная деятельность', 'url' => ['/site/contact']],
//        ['label' => 'Дополнительное образование', 'url' => ['/site/contact']],
//        ['label' => 'Информация о питании', 'url' => ['/site/contact']],
//        ['label' => 'Библиотека', 'url' => ['/site/contact']],
//        ['label' => 'Надзор и контроль', 'url' => ['/site/contact']],
//        ['label' => 'Дорожная безлпасность', 'url' => ['/site/contact']],
//        ['label' => 'Доступная среда', 'url' => ['/site/contact']],
//        ['label' => 'Пожарная безопасность', 'url' => ['/site/contact']],
//        ['label' => 'Контакты', 'url' => ['/site/contact']],
    ];
    /*if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }*/
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

 <!--   <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
-->
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
