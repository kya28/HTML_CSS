<?php 
include("header.php");
?>
<div class="main-content ">
	<div class="header-head">
</div>
	<div class="container box-head">
		<h1>Contact</h1>
		<p>We are only a click away</p>
</div>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<div class="content container">
	<div class="container maps">

<script type="text/javascript" charset="utf-8" 	 async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=wZJ6rb_SnIZQVqfwcUyhAmdKXwk7bYeG&width=90%&amp;height=300&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
	</div>
<div class="row container contact">

	<div class="col-lg-4  col-md-3 col-sm-12 col-xs-12 ">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sint consequuntur explicabo ad perferendis officia possimus enim molestias aliquid vero!</p>
		<p>
			<span class="red">Best PSD Freebies</span> <br> 328 Ave C <br> Saskatoon, SK	<br>	 S7R 2V9
		</p>
		<p>
			t: (888) 842 - 8356 <br>
			f: (888) 452 - 9257 <br> e:info@psdfreebies.com
		</p>
	</div>
	<div class=" col-lg-8  col-md-9 col-sm-12 col-xs-12">
		<form action="send.php" method="POST" >
			<input type="text" name="firstname" placeholder="First Name">
			<input type="text" name="lastname" placeholder="Last Name">
			<input type="text" name="email" placeholder="Email Address">
			<input type="text" placeholder="Url">
			<textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
			<button type="submit">Submit</button>
		</form>
	</div>
</div>
</div>
</div>

<?php 
include("footer.php");
?>