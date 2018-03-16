<?php
/**
 * @var $this yii\web\View
 */

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
<?php $this->beginContent('@backend/views/layouts/base.php'); ?>

<?php echo Yii::$app->view->renderFile('@backend/views/layouts/header.php'); ?>

<?php echo Yii::$app->view->renderFile('@backend/views/layouts/sidebar.php'); ?>

<section class="section-container">
    <div class="content-wrapper">
        <?php echo $content ?>
    </div>
</section>

<footer class="footer-container">
    <span>&copy; 2018 - Nutrirbox</span>
</footer>

<?php $this->endContent(); ?>
