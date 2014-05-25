<?php
namespace travis83bui\blog\widgets;

use \Yii;
use \yii\helpers\Html;

use travis83bui\blog\widgets\Portlet;

class UserMenu extends Portlet
{
	public function init()
	{
		$this->title='Trình quản lý bài viết';
		parent::init();
	}

	protected function renderContent()
	{
		echo $this->render('userMenu');
	}
}