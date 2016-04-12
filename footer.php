<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>













	</div><!-- #main -->



	<footer id="colophon" role="contentinfo">



			<?php

				/* A sidebar in the footer? Yep. You can can customize

				 * your footer with three columns of widgets.

				 */

				if ( ! is_404() )

					get_sidebar( 'footer' );

			?>



			

            

            

            <?php



 



			// Declare some helper vars

			

			$previous_year = $year = 0;

			

			$previous_month = $month = 0;

			

			$ul_open = false;

			

			 

			

			// Get the posts

			

			$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');

			

			 

			

			?>

            

            <div class="footer_cont_main">

<div class="footer-shadow"></div>

 <div class="footer-box-wrapper clear" style="height:auto;" >



 



 <h2 class="widgettitle">Posts</h2>



<?php foreach($myposts as $post) : ?>	



 



	<?php



 



	// Setup the post variables



	setup_postdata($post);



 



	$year = mysql2date('Y', $post->post_date);



	$month = mysql2date('n', $post->post_date);



	$day = mysql2date('j', $post->post_date);



 



	?>



 



	<?php if($year != $previous_year || $month != $previous_month) : ?>



 



		<?php if($ul_open == true) : ?>



		</ul>



		<?php endif; ?>



 



		<h3><?php the_time('F Y'); ?></h3>



 



		<ul class="month_archive">



 



		<?php $ul_open = true; ?>



 



	<?php endif; ?>



 



	<?php $previous_year = $year; $previous_month = $month; ?>



 



	<li>
		<table class="posts_info_table" >
			<tr>
				<td>
					<span class="the_day">
						<a href="<?php the_permalink(); ?>"><?php the_time('d') ?>/<?php the_time('m') ?>/<?php the_time('Y'); ?></a>
					</span>
				</td>
				<td class="dash_divide">&mdash;</td>
				<td>
					<span class="the_article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				</td>
			</tr>
		</table>
	</li>



 



<?php endforeach; ?>



	</ul>



</div>


<div id="site-generator">

				<?php do_action( 'twentyeleven_credits' ); ?>

				<a href="<?php echo esc_url( __( 'http://localhost:8081/wordpress', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Theme Author : Sugata', 'twentyeleven' ), 'WordPress' ); ?></a>

			</div>




</div>

       

	</footer><!-- #colophon -->

</div><!-- #page -->



<?php wp_footer(); ?>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '719429244834636',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
	  //js.src = "//connect.facebook.net/en_US/sdk/debug.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>

</html>