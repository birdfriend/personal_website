<?php

class page_album extends page
{
	protected function _content()
	{
		$template = new template();
		$imgFolder = __DIR__ . '/../../assets/img/';
		$albums = array();
		if(is_dir($imgFolder) && ($dh = opendir($imgFolder)))
		{
			while(($file = readdir($dh)) !== false)
			{
				if(strpos($file, '.') === false)
					$albums[] = $file;
			}
			closedir($dh);
		}
		$template->assign('basedir', $imgFolder);
		$template->assign('albums', $albums);
		$template->render('album.php');
	}
}