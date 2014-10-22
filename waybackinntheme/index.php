<?php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo("name");?></title>
	<link rel="stylesheet" href= "<?php bloginfo('stylesheet_url'); ?>">
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header id="main_header">
		<hgroup>
			<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo("name"); ?></a></h1>
			<h2><?php bloginfo("description"); ?></h2>
		</hgroup>	
	</header>
</body>
</html>
?>