<?php

class page{
	/**
	 * render this page to the front end
	 */
	public function render()
	{
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<!-- jQuery -->
				<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
				<!-- Bootstrap -->
				<link rel="stylesheet" href="/~birdfriend/assets/ext/bootstrap/css/bootstrap.min.css" media="screen">
				<script type="text/javascript" src="/~birdfriend/assets/ext/bootstrap/js/bootstrap.min.js"></script>
				<?php
				$cssIncludes = $this->_getCSSIncludes();
				foreach($cssIncludes as $item){
					?>
					<link rel="stylesheet" type="text/css" href="/~birdfriend/assets/css/<?php echo $item; ?>"/>
					<?php
				}
				$jsIncludes = $this->_getJSIncludes();
				foreach($jsIncludes as $item){
					?>
					<script type="text/javascript" src="/~birdfriend/assets/js/<?php echo $item; ?>"></script>
					<?php
				}
				?>
				<title>
					<?php $this->_title();?>
				</title>
			</head>
			<body>
				<?php 
				$this->_header();
				$this->_content();
				$this->_footer();
				?>
			</body>
		</html>
		<?php
	}

	protected function _title()
	{
		?>
		Cindy's Web Site
		<?php
	}
	protected function _header()
	{
		$template = new template();
		$template->render("topnavbar.php");
	}

	protected function _content()
	{
	}

	protected function _footer()
	{
		$template = new template();
		$template->render("disclaimer.php");
	}

	protected function _getCSSIncludes()
	{
		return array("core.css");
	}

	protected function _getJSIncludes()
	{
		return array();
	}
}