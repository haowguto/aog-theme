<html>
<head>
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>

    <!-- Dados estruturados -->
    <meta itemprop="name" content="André Guadalupe - especialista em educação de alto desempenho"/>
    <meta itemprop="description" content="André Oliveira Guadalupe - especialista em educação de alto desempenho"/>
    <meta itemprop="url" content="http://www.aogedu.com.br"/>
    <meta itemprop="email" content="andre@aogedu.com.br"/>

	<?php wp_head(); ?>
</head>
<body>
	<header class="taskbar">
		<div class="aog-max-size-container">
			<figure class="logo-header">
				<a href="<?php echo get_option('home'); ?>">
					<img src="/aog/wp-content/themes/aog-theme/img/logo-120px.png">
				</a>
			</figure>
			
			<nav class="menu-header-wrapper">
				<ul class="menu-header-categories">
					<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
					<?php wp_list_categories('title_li=' ); ?>
				</ul>
				<ul class="social-nav">
					<li>
						<a href="https://www.facebook.com/aogedu" class="fa fa-facebook"></a>
					</li>
					<li>
						<a href="https://www.youtube.com/user/andre97web" class="fa fa-youtube"></a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/andreguadalupe/" class="fa fa-linkedin"></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>