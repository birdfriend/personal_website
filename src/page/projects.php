<?php

class page_projects extends page
{
	protected function _content()
	{
		$template = new template();
		$template->render("projects.php");
	}
}