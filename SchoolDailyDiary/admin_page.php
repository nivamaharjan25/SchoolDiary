<?php

@include 'config.php';
@include 'header.php';
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Little Steps Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>

<body>

	<!-- <header>
		<nav id="navbar">
			<a href="#" id="logo">
				<img src="img/logo.png" alt="LogoOfSchool">
				<span class="name-school">Little Steps School</span>
			</a>
			<ul>
				<li class="item"><a href="#">Home</a></li>
				<li class="item"><a href="#">Activity Schedule</a></li>
				<li class="item"><a href="#">Food Schedule</a></li>
				<li class="item"><a href="#">Attendance</a></li>
				<li class="item"><a href="#">Setting</a></li>
			 
				<div class="icons">
					<div id="account-btn" class="fas fa-user"></div>
					<div id="menu-btn" class="fas fa-bars"></div> 
				</div>
					
				 
			</ul>      
		</nav>

		
	</header> -->
    <!-- <section id="home">
        <h1 class="h-primary">Little Steps</h1>
        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet 
            consectetur adipisicing elit. Molestias, excepturi!</p>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Molestias, excepturi!</p>
            
    </section> -->

	<!-- home section   -->
	<section class="home">
		<!-- <h1 class="gallery">Gallery</h1> -->
		<div class="row">
			<div class="column">
				<img src="img/bg.webp" id="image">
				<script type="text/javascript">
					let image = document.getElementById('image');
					let images = ['img/bg.webp','img/bg4.jpg','img/bg1.webp','img/bg2.jpg','img/bg3.jpg']
					setInterval(function(){
						let random = Math.floor(Math.random() * 5)
						image.src = images[random];
					}, 2000)
				</script>				
			</div>
			<!-- <div class="column">
				<img src="img/bg1.webp">
			</div>			 -->
		</div>
	</section>
	<section class="body-title">
		<h2 class="title">Welcome to Little Steps</h2>
		<!-- <br style="clear:both"> -->
		<p class="intro">
			Little Steps School is montessori based pre-school with day care facilities locates at Tyanglaphat, Kirtipur.
			It is established by a team of psychologist, child counselors and educationalists.
		</p>
	</section>

	<section class="curriculum">
		<h3 class="name-curriculum">Curriculum</h3>
		<ul>
			<li>Practical Life exercise</li>
			<li>Art & craft</li>
			<li>Story Telling</li>
			<li>Yoga, Dancing and Music</li>
			<li>Fun rhymes and thematic songs</li>
			<li>Drama/ Puppet shows</li>
			<li>Sand and water</li>
		</ul>
		<img src="img/bg2.jpg" alt="activity" class="image-curriculum">
	</section>
	<!-- footer section  -->
	<!-- <section class="footer">
		<div class="box-container">
			<div class="box">
				<h3> <i class="fas fa-book-reader"></i> Little Steps</h3>
				<a href="#" class="fab fa-facebook"></a>
				<a href="#" class="fab fa-instagram"></a>
				<a href="#" class="fab fa-twitter"></a>
			</div>
			<div class="box">
				 <h4>Usefull links</h4> 
				<a href="#" class="link">Ask questions</a>
				<a href="#" class="link">Send feedback</a>
			</div>
		</div>
	</section>  -->
	<?php
		@include 'footer.php';
	?>
</body>  
<!-- <div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Little Steps School</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div> -->

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>
