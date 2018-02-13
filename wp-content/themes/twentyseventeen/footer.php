<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<!-- footer section -->
<section class="footer-wthree">
	<div class="container">
		<div class="col-lg-4 col-md-4 col-sm-12 footer-grid" data-aos="zoom-in">
			<h3>Horarios de Atención</h3>
			<span class="line1"></span>
			<ul class="tweet-agile">
				<li>
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">http://ax.by/zzzz</a></p>
					<p class="tweet-p2">Posted 3 days ago.</p>
				</li>
				<li>
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a href="#">http://cx.dy/zzzz</a></p>
					<p class="tweet-p2">Posted 3 days ago.</p>
				</li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 footer-grid" data-aos="zoom-in">
			<span class="line4"></span>
			<h3>Latest Pics</h3>
			<span class="line2"></span>
			<ul class="clearfix demo">
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic1.jpg'?>" alt="" class="img-responsive"/></li>
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic2.jpg'?>" alt="" class="img-responsive"/></li>
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic3.jpg'?>" alt="" class="img-responsive"/></li>
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic4.jpg'?>" alt="" class="img-responsive"/></li>
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic5.jpg'?>" alt="" class="img-responsive"/></li>
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic6.jpg'?>" alt="" class="img-responsive"/></li>	
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic7.jpg'?>" alt="" class="img-responsive"/></li>
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic8.jpg'?>" alt="" class="img-responsive"/></li>
				<li><img src="<?php echo get_template_directory_uri(). '/images/footer-pic9.jpg'?>" alt="" class="img-responsive"/></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 footer-grid" data-aos="zoom-in">
			<span class="line5"></span>
			<h3>Latest News</h3>
			<span class="line3"></span>
			<ul class="footer-news">
				<li>
					<div class="news-content">
						<a href="#" class="news-header" data-toggle="modal" data-target="#news1"><h4>News From Blog</h4></a>
						<p class="news-p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra laoreet aliquet. </p>
						<p class="news-p2">Posted On January 16, 2017</p>
					</div>
					<div class="news-pic">
						<a href="#" data-toggle="modal" data-target="#news1"><img src="<?php echo get_template_directory_uri(). '/images/news-pic1.jpg'?>" alt="" class="img-responsive"></a>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="news-content">
						<a href="#" class="news-header" data-toggle="modal" data-target="#news2"><h4>News From Blog</h4></a>
						<p class="news-p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra laoreet aliquet. </p>
						<p class="news-p2">Posted On January 16, 2017</p>
					</div>
					<div class="news-pic">
						<a class="#" data-toggle="modal" data-target="#news2"><img src="<?php echo get_template_directory_uri(). '/images/news-pic2.jpg'?>" alt="" class="img-responsive"></a>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<span class="line6"></span>
    </div>
	<p class="copyright">© 2017 Scholastic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	<div class="modal fade" id="news1" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title w3-agile agileits-w3layouts w3layouts">Latest News</h4>
				</div>
				<div class="modal-body">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<img src="<?php echo get_template_directory_uri(). '/images/news-img1.jpg'?>" alt="" class="img-responsive">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<p class="news-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra laoreet aliquet. Sed tristique ex lectus, ut maximus ipsum tempus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porttitor eros quis leo bibendum, eu bibendum ligula malesuada.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="news2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title w3-agile agileits-w3layouts w3layouts">Latest News</h4>
				</div>
				<div class="modal-body">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<img src="<?php echo get_template_directory_uri(). '/images/news-img2.jpg'?>" alt="" class="img-responsive">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<p class="news-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra laoreet aliquet. Sed tristique ex lectus, ut maximus ipsum tempus a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porttitor eros quis leo bibendum, eu bibendum ligula malesuada.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>		
</section>


		<?php wp_footer(); ?>

<!-- /footer section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->	
<!-- js files -->
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/jquery.min.js'?>"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/SmoothScroll.min.js'?>"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/modernizr.min.js'?>"></script> 
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/jquery.easing.min.js'?>"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/grayscale.js'?>"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/jqBootstrapValidation.js'?>"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/contact_me.js'?>"></script>
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/top.js'?>"></script>
<!-- js for banner section -->
<script type="text/javascript" src="<?php echo  get_template_directory_uri() . '/js/bgfader.js'?>"></script>
<script>
	var myBgFader = $('.header').bgfader([
	"<?php echo get_template_directory_uri(). '/images/banner1.jpg'?>",
	"<?php echo get_template_directory_uri(). '/images/banner2.jpg'?>",
	"<?php echo get_template_directory_uri(). '/images/banner3.jpg'?>",
	"<?php echo get_template_directory_uri(). '/images/banner4.jpg'?>",
	], {
	'timeout': 3000,
	'speed': 3000,
	'opacity': 0.4
	})
	myBgFader.start()
</script>
<!-- /js for banner section -->
<!-- js for parallax effect -->
<script type="text/javascript"src="<?php echo  get_template_directory_uri() . '/js/jarallax.js'?>"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- /js for parallax effect -->
<!-- js for footer pic lightbox -->
<script src="<?php echo  get_stylesheet_directory_uri() . '/js/jquery.picEyes.js'?>"></script>
<script>
$(function(){
	//picturesEyes($('li'));
	$('ul.demo li').picEyes();
});
</script>
<!-- /js for footer pic lightbox -->
<!-- js for portfolio lightbox -->
<script src="<?php echo  get_stylesheet_directory_uri() . '/js/jQuery.lightninBox.js'?>"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->
<script src="<?php echo  get_stylesheet_directory_uri() . '/js/aos.js'?>"></script>
<script src="<?php echo  get_stylesheet_directory_uri() . '/js/index.js'?>"></script>
<!-- /js files -->	
</body>
</html>