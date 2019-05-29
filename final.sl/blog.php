<?php 
include("header.php");
?>
<div class="main-content">
	<div class="header-head"> </div>
	<div class="container box-head">
		<h1>Blog</h1>
		<p>Keep in the loop</p>
</div>
<div class="content container">
	<div class="row container">
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<h3>Amazing Free Portfolio PSD Theme</h3>
			<div class="psd"><img  src="img/psdport.png" alt="psd"></div>
			<div class="row ">
				<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0">
					<p>Date <br><span class="red">April 15 2012</span></p>
					<p>Tags <br><span class="red">Website Design</span></p>
					<p>Comments <br><span class="red">4</span></p>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatibus vero consectetur tempora facilis, unde consequatur nostrum ea nemo recusandae? Obcaecati odit eveniet, culpa repellat harum recusandae quos placeat mollitia.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt quisquam sequi id. Soluta quia inventore iusto, dolores pariatur similique!</p>
				</div>
			</div>
			<p class="band"></p>
<h3>Reimer Wedding Footage</h3>
<div><iframe width="90%" height="420" src="//rutube.ru/play/embed/7924214" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe></div>
			<div class="row ">
				<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0">
					<p>Date <br><span class="red">April 15 2012</span></p>
					<p>Tags <br><span class="red">Website Design</span></p>
					<p>Comments <br><span class="red">4</span></p>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatibus vero consectetur tempora facilis, unde consequatur nostrum ea nemo recusandae? Obcaecati odit eveniet, culpa repellat harum recusandae quos placeat mollitia.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt quisquam sequi id. Soluta quia inventore iusto, dolores pariatur similique!</p>
				</div>
			</div>
			<p class="band"></p>
			<h3>Sound Clip of Concert</h3>
			<div id="cp_widget_f956ba92-ee19-40d3-8012-75e94c966156">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_f956ba92-ee19-40d3-8012-75e94c966156"; cpo["_fid"] = "AsAAf79s8iMv";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by <a href='https://www.cincopa.com/media-platform/html-slideshow'>Cincopa</a> for Business solution.</noscript>
			<div class="row ">
				<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0">
					<p>Date <br><span class="red">April 15 2012</span></p>
					<p>Tags <br><span class="red">Website Design</span></p>
					<p>Comments <br><span class="red">4</span></p>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatibus vero consectetur tempora facilis, unde consequatur nostrum ea nemo recusandae? Obcaecati odit eveniet, culpa repellat harum recusandae quos placeat mollitia.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt quisquam sequi id. Soluta quia inventore iusto, dolores pariatur similique!</p>
				</div>
			</div>
			<div class="click">
				<span class="null"><a href="#1">1</a></span>
				<span class="null"><a href="#2">2</a></span>
				<span class="null"><a href="#3">3</a></span>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0">
		<br>
		<br>
		<br>
		<div class="acc_trigger">
				<h4>About Intent</h4>
			<p class="band"></p>
		</div>
			<div class="acc_container">
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sequi modi ut laudantium molestias expedita doloribus quasi quidem perferendis voluptatibus.</p>
			</div>
			<div class="acc_trigger">
				<h4>Categories</h4>
			<p class="band"></p>
			</div>
			<div class="acc_container">
				<nav>
				<ul class="categoties">
					<li><a href="#">Video (3)</a></li>
					<li><a href="#">Media (2)</a></li>
					<li><a href="#">Entertainment (7)</a></li>
					<li><a href="#">Life (4)</a></li>
					<li><a href="#">Super Cool Stuff (8)</a></li>
				</ul>
			</nav>
			</div>
			<div class="acc_trigger">
				<h4>Advertesements</h4>
			<p class="band"></p>
			</div>
			<div class="acc_container">
				<img src="img/adv.png" alt="adv">
			<div class="box-adv">Adversite Here</div>
			<div class="box-adv">Adversite Here</div>
			<div class="box-adv">Adversite Here</div>
			</div>
		</div>
	</div>
</div> </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
$('.acc_container').hide(); 
$('.acc_trigger:first').addClass('active').next().show(); 
$('.acc_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { 
		$('.acc_trigger').removeClass('active').next().slideUp(); 
		$(this).toggleClass('active').next().slideDown(); 
	}
	return false; 
});
});
</script> 
<?php 
include("footer.php");
?>