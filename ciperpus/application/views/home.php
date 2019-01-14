<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Renda - clean blog theme based on Bootstrap</title>
		<!-- Bootstrap core CSS -->
		<link href="assets/home/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="assets/home/css/jquery.bxslider.css" rel="stylesheet">
		<link href="assets/home/css/style.css" rel="stylesheet">
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="#about">Panduan</a></li>
						<li><a href="#contact">Sejarah</a></li>
						<li><a href="#contact">Olahraga</a></li>
						<li><a href="about.html">Profile</a></li>
						<li><a href="<?= base_url('login') ;?>">Login</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-reddit"></i></a></li>
					</ul>

				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">
		<header>
			<a href="index.html"><img src="assets/home/images/13.png"></a>
		</header>
		<section class="main-slider">
			<ul class="bxslider">
				<li><div class="slider-item"><img src="assets/home/images/1cover.jpg" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home"></a></h2></div></li>
				<li><div class="slider-item"><img src="assets/home/images/2.jpg" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home"></a></h2></div></li>
				<li><div class="slider-item"><img src="assets/home/images/3.jpg" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home"></a></h2></div></li>
			</ul>
		</section>
		<section>
			<div class="row">
				<div class="col-md-8">
					<article class="blog-post">
						<div class="blog-post-image">
							<a href="post.html"><img src="assets/home/images/4.jpg" alt=""></a>
						</div>
						<div class="blog-post-body">
							<h2><a href="post.html">Surga mungkin sebuah perpustakaan raksasa yang semua isinya terbuat dari coklat. Kau bisa membaca lalu memakan semuanya.</a></h2>
							<div class="post-meta"><span>by <a href="#">src="assets/home/js/</a></span>/<span><i class="fa fa-clock-o"></i>March 18, 2018</span>/<span><i class="fa fa-comment-o"></i> <a href="#">343</a></span></div>
							<p>Tulislah tentang aku dengan tinta hitam atau tinta putihmu. Biarlah sejarah membaca dan menjawabnya.</p>
							<div class="read-more"><a href="#">Continue Reading</a></div>
						</div>
					</article>
					<!-- article -->
					<article class="blog-post">
						<div class="blog-post-image">
							<a href="post.html"><img src="assets/home/images/5.jpg" alt=""></a>
						</div>
						<div class="blog-post-body">
							<h2><a href="post.html">Kemampuan membaca itu sebuah rahmat. Kegemaran membaca, sebuah kebahagiaan.</a></h2>
							<div class="post-meta"><span>by <a href="#">Armansyah</a></span>/<span><i class="fa fa-clock-o"></i>March 18, 2018</span>/<span><i class="fa fa-comment-o"></i> <a href="#">343</a></span></div>
							<p>Ilmu itu ada dimana-mana, pengetahuan dimana-mana tersebar, kalau kita bersedia membaca, dan bersedia mendengar.</p>
							<div class="read-more"><a href="#">Continue Reading</a></div>
						</div>
					</article>
					<!-- article -->
					<article class="blog-post">
						<div class="blog-post-image">
							<a href="post.html"><img src="assets/home/images/6.jpg" alt=""></a>
						</div>
						<div class="blog-post-body">
							<h2><a href="post.html">Kemampuan membaca medan, kecerdikan melihat kesempatan, dibutuhkan di tengah persaingan.</a></h2>
							<div class="post-meta"><span>by <a href="#">Armansyah</a></span>/<span><i class="fa fa-clock-o"></i>March 18, 2018</span>/<span><i class="fa fa-comment-o"></i> <a href="#">343</a></span></div>
							<p>Dengan membaca aku melepaskan diri dari kenyataan yaitu kepahitan hidup. Tanpa membaca aku tenggelam sedih. Tapi sebentar lagi akan datang saatnya dimana aku tidak bisa lagi lari dari kenyataan. Kenyataan yang pahit tidak bisa dihindari teris-menerus berhubung dualitas diri yaitu jasmani dan roahani. Sebentar lagi kenyataan akan menangkapku dan aku belum tahu bagaimana saat itu harus kuhadapi. Saat itu adalah saat yang paling pahit.</p>
							<div class="read-more"><a href="#">Continue Reading</a></div>
						</div>
					</article>
				</div>
				<div class="col-md-4 sidebar-gutter">
					<aside>
					<!-- sidebar-widget -->
					<div class="sidebar-widget">
						<h3 class="sidebar-title">About Me</h3>
						<div class="widget-container widget-about">
							<a href="post.html"><img src="assets/home/images/Profile.jpg" alt=""></a>
							<h4>Armansyah</h4>
							<div class="author-title">Designer</div>
							<p>Nama Saya Armansyah. Saya kuliah di Universitas Bina Sarana Informatika jurusan Sistem Informasi. Di sini, saya ingin menampilkan web tentang perpustakaan_bogor.</p>
						</div>
					</div>
					<!-- sidebar-widget -->
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Featured Posts</h3>
						<div class="widget-container">
							<article class="widget-post">
								<div class="post-image">
									<a href="post.html"><img src="assets/home/images/7.jpg" alt=""></a>
								</div>
								<div class="post-body">
									<h2><a href="post.html">Olahraga</a></h2>
									<div class="post-meta">
										<span><i class="fa fa-clock-o"></i> 1. august 2018</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
									</div>
								</div>
							</article>
							<article class="widget-post">
								<div class="post-image">
									<a href="post.html"><img src="assets/home/images/8.jpg" alt=""></a>
								</div>
								<div class="post-body">
									<h2><a href="post.html">Pengetahun</a></h2>
									<div class="post-meta">
										<span><i class="fa fa-clock-o"></i> 1. august 2018</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
									</div>
								</div>
							</article>
							<article class="widget-post">
								<div class="post-image">
									<a href="post.html"><img src="assets/home/images/9.jpg" alt=""></a>
								</div>
								<div class="post-body">
									<h2><a href="post.html">Gaya hidup</a></h2>
									<div class="post-meta">
										<span><i class="fa fa-clock-o"></i> 1. august 2018</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
									</div>
								</div>
							</article>
							<article class="widget-post">
								<div class="post-image">
									<a href="post.html"><img src="assets/home/images/10.jpg" alt=""></a>
								</div>
								<div class="post-body">
									<h2><a href="post.html">Sejarah</a></h2>
									<div class="post-meta">
										<span><i class="fa fa-clock-o"></i> 1. august 2018</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
									</div>
								</div>
							</article>
							<article class="widget-post">
								<div class="post-image">
									<a href="post.html"><img src="assets/home/images/11.jpg" alt=""></a>
								</div>
								<div class="post-body">
									<h2><a href="post.html">Buku-buku terupdate</a></h2>
									<div class="post-meta">
										<span><i class="fa fa-clock-o"></i> 1. august 2018</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
									</div>
								</div>
							</article>
						</div>
					</div>
					<!-- sidebar-widget -->
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Socials</h3>
						<div class="widget-container">
							<div class="widget-socials">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-reddit"></i></a>
							</div>
						</div>
					</div>
					<!-- sidebar-widget -->
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Categories</h3>
						<div class="widget-container">
							<ul>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="#">Design</a></li>
								<li><a href="#">Featured</a></li>
								<li><a href="#">Graphics</a></li>
								<li><a href="#">Peoples</a></li>
								<li><a href="#">Uncategorized</a></li>
							</ul>
						</div>
					</div>
					</div>
					</aside>
				</div>
			</div>
		</section>
		</div><!-- /.container -->

		<footer class="footer">

			<div class="footer-socials">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-reddit"></i></a>
			</div>

			<div class="footer-bottom">
				<i class="fa fa-copyright"></i> Copyright 2019. All rights reserved.<br>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="assets/home/js/bootstrap.min.js"></script>
		<script src="assets/home/js/jquery.bxslider.js"></script>
		<script src="assets/home/js/mooz.scripts.min.js"></script>
	</body>
</html>