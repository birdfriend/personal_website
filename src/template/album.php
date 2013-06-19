<?php

$basedir = $this->_data['basedir'];
$albums = array();
foreach($this->_data['albums'] as $albumDir)
{
	$imgs = array();
	if(is_dir($basedir.$albumDir) && ($dh = opendir($basedir.$albumDir)))
	{
		while(($file = readdir($dh)) !== false)
		{
			$fileExtension = end(explode('.', $file));
			if(strcasecmp($fileExtension, 'jpg') == 0)
				$imgs[] = $file;
		}
	}
	$albums[$albumDir] = $imgs;
}
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3">
			<div class="well sidebar-nav affix">
				<ul class="nav nav-list">
					<?php foreach($albums as $name => $imgs){ ?>
					<li><a href="./album.php#<?php echo $name;?>"><?php echo strtoupper($name);?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="span9">
			<?php foreach($albums as $name => $imgs) { ?>
			<div id=<?php echo $name;?> class="carousel slide">
				<ol class="carousel-indicators">
					<?php for($index = 0; $index < count($imgs); $index++) { ?>
					<li data-target=<?php echo "#".$name;?> data-slide-to="<?php echo $index;?>" <?php if($index == 0) echo "class=active";?>></li>
					<?php } ?>
				</ol>
				<div class="carousel-inner">
					<?php for($index = 0; $index < count($imgs); $index++) { ?>
					<div class="item <?php if($index == 0) echo "active";?>">
						<img alt="" src=<?php echo "/~birdfriend/assets/img/" . $name."/".$imgs[$index]; ?>>
						<div class="container">
							<div class="carousel-caption">
								<p><?php echo strtoupper($name) . "-" . $imgs[$index];?></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<a class="carousel-control left" href=<?php echo "#".$name;?> data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href=<?php echo "#".$name;?> data-slide="next">&rsaquo;</a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>