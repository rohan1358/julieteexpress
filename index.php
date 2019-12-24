
<!doctype html>
<html lang="en">
  <head>
  	<!-- style -->
  	<style type="text/css">

  	</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#000">
	<title>juliet Express</title>
	  <!-- Favicon -->
		<link rel="shortcut icon" href="images/fav.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/et-line-icons.css"/>
    <link rel="stylesheet" href="css/fontawesome/css/all.css"/>
    <link rel="stylesheet" href="css/lity.min.css"/>
    <link rel="stylesheet" href="css/lightbox.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/animated-headline.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/custome.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-md">
		  <div class="container">
			  <a class="navbar-brand" href="index.php">
				  <img src="images/logo-jul.png" class="w-logo" alt="img"> 
				  <img src="images/logo-jul.png" class="b-logo" alt="img"> 
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-stream"></i>
			  </button>
			  <div class="collapse navbar-collapse" id="main-navbar">
				  <ul class="navbar-nav ml-auto">  
				      <li class="nav-item">
					  	<a class="nav-link" href="index.php">Home</a>
				  	  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="?page=about" >Tentang Kami</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="?page=product" >Produk Kami</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="?page=skemakerjasama" ">Skema Kerja Sama</a>
						</li>
					  <li class="nav-item">
					  	<a class="nav-link" href="?page=kemitraan">Kemitraan</a>
					  </li>
				  </ul>
			  </div>
		  </div>
	  </nav>
	  
	  	<?php

			
			if(empty($_GET['page'])) {
				include 'home.php';
			} else {
				if(!file_exists($_GET['page'].'.php')) {
					if($_GET['page'] == 'daftarsuccess') {
						echo '<section class="breadcumbs" data-scroll-index="1">	
								<div class="container">
									<div class="content-breadcumbs">
										<h3>Daftar Kemitraan</h3>
									</div>
								</div>
						</section>
						<br/>
							<div class="container" style="padding:100px 200px">
									<div class="alert alert-success" role="alert">
									Daftar Kemitraan sukses
								</div>
							</div>	';
						} else {
						echo "page gak ada";
					}
				} else {
					include $_GET['page'].'.php';
				}
			}

		?>

      <div class="footer-area text-center footer-padding bg-222">
          <div class="container">
			  <div class="row">
					<div class="col-md-12">
						<div class="social-icons">
							<a href="#" target="_blank" class="color-bbb radius-50 mr-5px mb-10px color-fff-hvr bg-orange-hvr transition-3"><i class="fab fa-facebook-f"></i></a>
							<a href="#" target="_blank" class="color-bbb radius-50 mr-5px mb-10px color-fff-hvr bg-orange-hvr transition-3"><i class="fab fa-instagram"></i></a>
							<a href="#" target="_blank" class="color-bbb radius-50 mr-5px mb-10px color-fff-hvr bg-orange-hvr transition-3"><i class="fab fa-youtube"></i></a>
						</div>
					</div>
		
					<div class="col-md-12">
						<p class="mt-10px mb-0px color-eee">© 2019 Designed by <strong class="color-orange">nanangkristanto.com</strong> </p>
					</div>
			  </div>
		  </div>
	  </div>


	  <div class="modal fade" id="modalKemitraan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<img src="images/kemitraan.jpeg" class="img-responsive" alt="">
			</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	<!-- <div class="wa-message">
		<a href="https://api.whatsapp.com/send?phone=6281291363584&text=Hello%2C%20World!" target="_blank">
			<img src="images/wa.png" alt="img-shadow">
		</a>
	</div> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/animated-headline.js"></script>
    <script src="js/lity.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
  	<script src="js/map-white.js"></script>
	<script src="js/main.js"></script>
	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>

	
	  
	<script>
		$(document).ready(function() {

			<?php
			if(empty($_GET['page'])) {
				echo "$('#modalKemitraan').modal('show');";
			}
			?>
			
			var name, email, subject, message;

			$('#btn-send').on('click', function () {
				name = $('#name');
				email = $('#email');
				subject = $('#subject');
				message = $('#message');
				if(name.val() == '') {
					name.addClass('is-invalid')
				}

				if(email.val() == '') {
					email.addClass('is-invalid')
				}

				if(subject.val() == '') {
					subject.addClass('is-invalid')
				}

				if(message.val() == '') {
					message.addClass('is-invalid')
				}

				if (validateEmail(email.val())) {
					$.ajax({
						url : 'mail.php',
						method : 'post',
						data : {
							name : name.val(),
							email : email.val(),
							subject : subject.val(),
							message : message.val()
						},
						succes : function(data) {
							if(data.status == 'success') {
								console.log('success')
							} else {
								console.log('failed')
							}
						}
					})
				} else {
					email.addClass('is-invalid')
				}
			})
		})

		function validateEmail(email) {
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}

	</script>
	  
  </body>
</html>