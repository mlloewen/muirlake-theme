<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Muir Lake
 */
?>
<?php get_header(); ?>
<style>
    .google-maps {
    position: relative;
    padding-bottom: 75%; // This is the aspect ratio
    height: 0;
    overflow: hidden;
    }
    .google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    }
    </style>

<div id="main">
	<div class="container">
<!--	<?php the_content(); ?> -->

<h2>Contact</h2><span id="map"></span><?php echo(wpautop(get_post_field( post_content , 31 ))); ?> 
<div class="col-2"><a href="javascript:void(0)" onclick="mymap();">
				<img src="<?php bloginfo('template_directory'); ?>/images/map2.jpg" alt="">
			</a></div>
	<div class="clearfix"></div>
	</div><!-- .container -->
</div><!-- Main -->

<script type="text/javascript">
function mymap() {
	document.getElementById("map").innerHTML = " <button onclick='emptymap();'>X</button><style>#map { padding-bottom: 30px; } .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 20; left: 0; width: 100%; height: 100%;}</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2366.946328573164!2d-114.002863!3d53.612260000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x539f850d92f3c127%3A0xace622564a86a97b!2sMuir+Lake+Community+Alliance+Church!5e0!3m2!1sen!2sca!4v1417670115659' width='800' height='600' frameborder='0' style='border:0'></iframe><br /> " ;
	location.hash = '#map';
}
function emptymap() {
	document.getElementById("map").innerHTML = "";
}
</script>

<?php get_footer(); ?>