
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header>
	
<div class="main-slider">

    <?php $query = new WP_Query([ 'post_type' => 'slider'] ) ?>
    <?php while($query->have_posts()): $query->the_post( ); ?>
    <div class="item" style="background-image: url(<?php the_post_thumbnail_url('full') ?>);">
	<div class="Header-top" id="mainNav">
		<div class="container">
			<div class="d-flex align-items-center">
				<div class="logo">
					<div class="h1"><a href="<?php the_custom_logo() ?>" class="logo"> Logo</a></div>
					
				</div>
				<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-site',
					'menu_id'        => 'primary-menu',
					'container'		=> false
				)
			);
			?>
		</nav>

		<div class="btn-mobile">
		<i class="fa-solid fa-bars"></i>
		</div>
			</div>
		</div>
</div>
<div class="caption text-center">
    <h2><?php the_title( )?></h2>
    <div class="content">
        <?php the_content( ) ?>
     </div>
</div>
    </div>
    <?php endwhile; wp_reset_postdata () ?>
</div>
</header>
	