<?php require 'frames/html.head.php'; ?>

<div class="top" id='top'><video autoplay id="autoplayvideo" loop poster="<?php bloginfo('template_directory') ?>/images/video/video.jpg">
	<source src="<?php echo bloginfo('template_directory'); ?>/images/video/video.m4v" type="video/mp4">
	<source src="<?php echo bloginfo('template_directory'); ?>/images/video/video.webm" type="video/webm">
</video><div class="overlay"><div class="logo"></div></div></div>

<div class="container">

<nav class="site-nav">
	<?php 
		wp_nav_menu(array('theme_location' => 'primary'));
	?>
</nav>
	
<div class="maincontent">
	<div class="middler">
<?php 
	if(have_posts()){
		while(have_posts()) : the_post(); ?>
		
		<h2 class="paginatitle"><?php the_title() ?></h2>
		<p><?php the_content() ?></p>
		
		<?php endwhile; 
		} // endif
?>

<?php
$args = array(
	'numberposts' => 3,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );

//var_dump($recent_posts);
?>

</div>

<?php if ( !is_front_page() && is_home() ) { } else { ?>


<div class="laatsteaanbiedingen">
	<div class="middler">

		<h2 class="paginatitle">Winkelaanbiedingen</h2>
		
		<?php foreach($recent_posts as $post){ ?>
		<div class="post_aanbieding">
			<div class="title"><?php echo $post['post_title'] ?></div>
			<div class="content"><?php echo $post['post_content'] ?></div>
		
		</div><?php } ?>
	</div>
</div>
<?php } ?>

</div>

<?php require 'frames/html.footer.php'; ?>