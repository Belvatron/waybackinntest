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
		
		<?php wp_nav_menu(array("menu" => "Primary Menu")); ?>
		<div class="clear"></div>
	</header>
	<div>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_content(); ?></p>
		<?php endwhile; else: ?>
			<p>Sorry no posts to display</p>
		<?php endif; ?>
	
	
	</div>
</body>
</html>