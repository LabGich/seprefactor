<header id="header" class="fixed-top">
	<div class="container d-flex align-items-center">

		<!-- <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1> -->
		<!-- Uncomment below if you prefer to use an image logo -->
		<a href="/Home" class="logo me-auto me-lg-0"><img src="https://www.sepke.meneja.co.ke/assets/img/logo.png" alt="" class="img-fluid"></a>

		<nav id="navbar" class="navbar order-last order-lg-0">
			<i class="bi bi-list mobile-nav-toggle"></i>
			<ul>
				<li><a href="/Home" <?php if ($_SESSION['page'] == 'homepage') {  ?> class="active" <?php } ?>>Home</a></li>
				<li class="dropdown"><a href="/Home/About" <?php if ($_SESSION['page'] == 'about') {  ?> class="active" <?php } ?>><span>About</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="/Home/About">Overview</a></li>
						<li><a href="/Home/About#awards">Our Awards</a></li>
						<li><a href="/Home/About#headingOneorigin">Core Principles</a></li>
						<li><a href="/Home/About#impact">Our Impact</a></li>
						<li><a href="/Home/About#team">Our Team</a></li>
						<li><a href="/Home/About#partners">Partners</a></li>
						<li><a href="/Home/About#headingOneorigin">Our History</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#"><span>Programs</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a <?php if ($_SESSION['page'] == 'sexualhealth') {  ?> class="active" <?php } ?> href="/Home/Sexualhealthinfo">Sexual and Reproductive Health</a></li>
						<li><a <?php if ($_SESSION['page'] == 'healthhygiene') {  ?> class="active" <?php } ?> href="/Home/Healthhygiene">Health and Hygiene</a></li>
						<li><a <?php if ($_SESSION['page'] == 'communitydevelopment') {  ?> class="active" <?php } ?> href="/Home/Communitydevelopment">Community Development</a></li>
						<li><a <?php if ($_SESSION['page'] == 'soccer') {  ?> class="active" <?php } ?> href="/Home/Soccer">Soccer/Football Program </a></li>
						<li><a <?php if ($_SESSION['page'] == 'youth') {  ?> class="active" <?php } ?> href="/Home/Youth">Youth Self-Help Agriculture Program</a></li>
					</ul>
				</li>
				<li><a <?php if ($_SESSION['page'] == 'contact') {  ?> class="active" <?php } ?> href="/Home/Contact" <?php if ($_SESSION['page'] == 'contact') {  ?> class="active" <?php } ?>>Contact Us</a></li>
				<li><a href="/Home/Events" <?php if ($_SESSION['page'] == 'events') {  ?> class="active" <?php } ?>>Events</a></li>
				<li><a href="/Home/Blog" <?php if ($_SESSION['page'] == 'blog') {  ?> class="active" <?php } ?>>Blog</a></li>
				<li style="margin-left: 50px !important;">
					<form action="https://www.paypal.com/donate" method="post" target="_top">
						<input type="hidden" name="hosted_button_id" value="NK8FC8QRNLRKS" />
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
						<img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1" height="1" />
				</li>
				
			</ul>

		</nav><!-- .navbar -->

		



	</div>
</header><!-- End Header -->