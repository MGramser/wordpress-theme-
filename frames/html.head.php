<?php 
	global $post;
?>
<html>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		
		<title>Gramser Sports<?php echo ' | ' . get_the_title($post->ID) ?></title>
		
		<?php wp_head(); ?>
		

		
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=689062151192673";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		
		
		<meta property="og:url"           content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="<?php echo get_the_title($post->ID) ?>" />
<!-- 		<meta property="og:description"   content="Website" /> -->
<!-- 		<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" /> -->
		
		
	</head>
	<body <?php body_class(); ?> >