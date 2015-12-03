<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Yosemite  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20091106

Modified for Concrete5 by Jordan Lev - http://jordanlev.com
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php  Loader::element('header_required'); ?>
<link rel="stylesheet" type="text/css" href="<?php  print $this->getStyleSheet('main.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php  print $this->getStyleSheet('typography.css'); ?>" />
</head>

<body>
<div id="c5wrapper">
<div id="wrapper">

	<div id="menu">
		<?php 
		$bt_nav = BlockType::getByHandle('autonav');
		$bt_nav->controller->displayPages = 'top';
		$bt_nav->controller->orderBy = 'display_asc';
		$bt_nav->controller->displaySubPages = 'none';
		$bt_nav->render('templates/header_menu');
		?>
	</div>
	<!-- end #menu -->
	
	<div id="header">
		<div id="logo">
			<h1><a href="<?php  print DIR_REL; ?>/"><?php  print SITE; ?></a></h1>
		</div>
	</div>
	<!-- end #header -->
