<?php

class Template {
	public static function output($content) {
		if ($GLOBALS['template'] == TRUE) {
		$return='
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>'.SITE_BRAND.' Krnr</title>
		<link href="'.LINK_ABS.'/assets/bootstrap.min.css" rel="stylesheet">
		<link href="'.LINK_ABS.'/assets/styles.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script src="'.LINK_ABS.'/assets/jquery.min.js"></script>
		<script src="'.LINK_ABS.'/assets/bootstrap.min.js"></script>
		<script src="'.LINK_ABS.'/assets/krnr.js"></script>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1>'.SITE_BRAND.' Krnr Documentation System</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="well sidebar-nav">
					</div>
				</div>
				<div class="col-sm-9">
	'.$content.'
				</div>
			</div>
			<hr>

			<footer>
				<p>&copy; '.SITE_BRAND.' '.date('Y').'</p>
			</footer>
		</div>
	</body>
</html>';
			return $return;
		} else {
			return $content;
		}
	}
}
?>