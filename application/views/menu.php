<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<!-- <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1> -->
			<!-- Uncomment below if you prefer to use an image logo -->
			<a href="/Home" class="logo me-auto me-lg-0"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a href="/Home" <?php if ($_SESSION['page'] == 'homepage') {  ?> class="active" <?php } ?> >Home</a></li>
					<li class="dropdown"><a href="/Home/About" <?php if ($_SESSION['page'] == 'about') {  ?> class="active" <?php } ?>><span>About</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="/Home/About">About Us</a></li>
							<li><a href="/Home/About#team">Staff & Volunteers</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#"><span>Programs/Projects/Causes</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="sexualhealth.html">Sexual and Reproductive Health</a></li>
							<li><a href="healthhygiene.html">Health and Hygiene</a></li>
							<li><a href="communitydevelopment.html">Community Development</a></li>
							<li><a href="soccer.html">Soccer/Football Program </a></li>
							<li><a href="youth-self-help-agriculture-program.html">Youth Self-Help Agriculture Program</a></li>
							<li> <a href="causes.html">All Causes </a></li>
						</ul>
					</li>
					<li><a href="/Home/Contact" <?php if ($_SESSION['page'] == 'contact') {  ?> class="active" <?php } ?>  >Contact Us</a></li>

				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

			<div class="header-social-links d-flex">
				<a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
				<a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
				<a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
				<a href="mailto:info@sepke.org"><i class="bi bi-envelope-fill"></i>info@sepke.org</a>
			</div>
			
			
			<div class="img-button ml-2">
				<div class="btn-overlay">
					<form action="https://www.paypal.com/donate" method="post" target="_top">
						<input type="hidden" name="hosted_button_id" value="NK8FC8QRNLRKS" />
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
						<img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1" height="1" />
					</form>
					<!-- 								<a href="#" class="btn btn-primary">DONATE NOW</a> -->
				</div>
			</div>

		</div>
	</header><!-- End Header -->
