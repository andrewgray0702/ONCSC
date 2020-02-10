<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="ag-nav-container">
		<div class="ag-nav">
			<div class="ag-nav-left">
				<span class="ag-nav-logo">ONCSC.ORG</span>
			</div>
			<div class="ag-nav-right">
				<ul id="main-menu">
					<li><a href="/">Home</a></li>
					<li class="main-menu-spacer">|</li>
					<li><a href="/volunteer">Volunteer</a></li>
					<li class="main-menu-spacer">|</li>
					<li><a href="/events">Calendar</a></li>
					<li class="main-menu-spacer">|</li>
					<li><a href="/about-us/">About Us</a></li>
					<li class="main-menu-spacer">|</li>
					<li><a href="/other-links">Other Links</a></li>
				</ul>
			</div>
		</div>
	</div>
