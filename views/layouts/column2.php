module
<?php
use \Yii;

use common\modules\blog\widgets\UserMenu;
use common\modules\blog\widgets\TagCloud;
use common\modules\blog\widgets\RecentComments;

$this->beginContent('@app/views/layouts/main.php'); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9">
      <?php echo $content; ?>
    </div>
    <div class="span3">
      <?php if(!Yii::$app->user->isGuest) echo UserMenu::widget(); ?>
	
      <?php echo TagCloud::widget(array(
          'maxTags'=>10, // TODO: Module->params['tagCloudCount'],
      )); ?>

      <?php echo RecentComments::widget(array(
          'maxComments'=>10, // TODO: Yii::$app->params['recentCommentCount'],
      )); ?>
    </div>
  </div>
</div>
<?php $this->endContent(); ?>
