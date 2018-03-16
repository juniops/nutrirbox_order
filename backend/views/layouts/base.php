<?php
use backend\assets\BackendAsset;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
$bundle = BackendAsset::register($this);
$this->params['body-class'] = array_key_exists('body-class', $this->params) ?
    $this->params['body-class']
    : null;
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language ?>">

    <head>
        <meta charset="<?php echo Yii::$app->charset ?>">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <?php echo Html::csrfMetaTags() ?>
        <title><?php echo Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <?php echo Html::beginTag('body') ?>
    <?php $this->beginBody() ?>

    <div class="wrapper">
        <?php echo $content ?>
    </div>

    <?php $this->endBody() ?>
    <?php echo Html::endTag('body') ?>
    </html>
<?php $this->endPage() ?>