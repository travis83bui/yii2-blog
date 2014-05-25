<?php
use \yii\helpers\Html;
use common\modules\blog\models\Comment;
?>
<?php
echo yii\widgets\Menu::widget([
	'options'=>['class'=>'unstyle'],
	'items'=>[
		['label'=>'Tạo mới','url'=>Yii::$app->urlManager->createUrl('/blog/post/create')],
		['label'=>'Quản lý','url'=>Yii::$app->urlManager->createUrl('/blog/post/admin')],
		['label'=>'Bình luận','url'=>Yii::$app->urlManager->createUrl('/blog/comment/index')],
	]
]
);
?>