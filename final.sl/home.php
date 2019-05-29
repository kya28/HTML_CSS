<?php 
include("header.php");
?>
<div class="main-content">
<div class="img-bg"><img src="img/img.png" alt="main-img"></div>
<div class="text"><h2 class="main-text">Place Your Description Text  </h2> <br><br><h2 class="main-text">Here. Great Spot to Tell  </h2><br><br> <h2 class="main-text">About Deals. 	</h2></div>
	<div class="sl">
	<div class="sl__slide"><img src="img/new/1.jpg" alt="картинка слайда 1" class="sl__img"></div>
	<div class="sl__slide"><img src="img/new/2.jpg" alt="картинка слайда 2" class="sl__img"></div>
	<div class="sl__slide"><img src="img/new/3.jpg" alt="картинка слайда 3" class="sl__img"></div>
	<div class="sl__slide"><img src="img/img.png" alt="картинка слайда 4" class="sl__img"></div>
	<div class="sl__slide"><img src="img/new/5.jpg" alt="картинка слайда 5" class="sl__img"></div>
	<div class="sl__slide"><img src="img/new/6.jpg" alt="картинка слайда 6" class="sl__img"></div>
	<div class="sl__slide"><img src="img/new/7.jpg" alt="картинка слайда 7" class="sl__img"></div>
</div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  
  <script type="text/javascript" src="js/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.sl').slick({
 centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
      });
    });
  </script>
	<div class="container row content">

		<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
			<h3><i class="fa fa-cog" aria-hidden="true"></i> Awesome Sliders</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quaerat quia commodi temporibus nam, expedita unde aliquam molestias tempore sit?</p>
		</div>
		<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
			<h3><i class="fa fa-user-o" aria-hidden="true"></i> Modern Theme</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quaerat quia commodi temporibus nam, expedita unde aliquam molestias tempore sit?</p>
		</div>
		<div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
			<h3> <i class="fa fa-eyedropper" aria-hidden="true"></i> Customize It</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam quaerat quia commodi temporibus nam, expedita unde aliquam molestias tempore sit?</p>
		</div>
		<div class="text-center">
			<p class="tab-box"><a href="#">make an</a></p>
			<p class="tab-box"><a href="#">impression</a></p>
			<p class="tab-box"><a href="#">that shines</a></p>
		</div>
		<div class="text_left">
			<p class="tab-left"><a href="#">All</a></p>
			<p class="tab-left"><a href="#">Print</a></p>
			<p class="tab-left"><a href="#">Photography</a></p>
			<p class="tab-left"><a href="#">Web</a></p>
			<p class="tab-left"><a href="#">Animation</a></p>
		</div>
		<div class="photo row">
				<div class="cover  text-center col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim1.png" alt="1">
			<div class="overlay"><span>Business cards</span></div>	</div>
			<div class="cover col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim2.png" alt="2">
			<div class="overlay"><span>Business cards</span></div>	</div>
			<div class="cover col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim3.png" alt="3">
			<div class="overlay"><span>Business cards</span></div>	</div>
			<div class="cover col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim4.png" alt="4">
			<div class="overlay"><span>Business cards</span></div>	</div>
			<div class="cover col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim5.png" alt="5">
			<div class="overlay"><span>Business cards</span></div>	</div>
			<div class="cover col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim6.png" alt="6">
			<div class="overlay"><span>Business cards</span></div>	</div>
			<div class="cover col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim7.png" alt="7">
			<div class="overlay"><span>Business cards</span></div>	</div>
			<div class="cover col-lg-3  col-md-4 col-sm-12 col-xs-12"><img src="img/portfolio/fim8.png" alt="8">
			<div class="overlay"><span>Business cards</span></div>
		</div>
		</div>
		</div>
</div>
<?
include("footer.php");
?>