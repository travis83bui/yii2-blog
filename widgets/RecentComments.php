<?php
namespace travis83bui\blog\widgets;

use travis83bui\blog\widgets\Portlet;
use travis83bui\blog\models\Comment;

class RecentComments extends Portlet
{
	public $title='Recent Comments';
	public $maxComments=10;

	public function getRecentComments()
	{
		return Comment::findRecentComments($this->maxComments);
	}

	protected function renderContent()
	{
		echo $this->render('recentComments');
	}
}