<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- Bootstrap -->
    <link href="<?php echo base_url('Assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('Assets/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('Assets/css/animate.css')?>">
	<link href="<?php echo base_url('Assets/css/animate.min.css')?>" rel="stylesheet"> 
	<link href="<?php echo base_url('Assets/css/style.css')?>" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	
  <footer>
		<div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>About Us</h4>
				<p>Day is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>						
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
						<li><i class="fa fa-phone fa"></i> +38 000 129900</li>
						<li><i class="fa fa-envelope fa"></i> info@domain.net</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">				
				<div class="text-center">
					<h4>Partenaires</h4>
					<div class="copyr">
					<p><a target="_blank" href="http://cristalteam.com" title="www.cristalteam.com"><img class='ico' src="<?php echo base_url('Assets/img/cteam.png')?>"/></a></p>
				</div>
					<!-- <ul class="sidebar-gallery">
						<li><a href="#"><img src="img/gallery1.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery2.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery3.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery4.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery5.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery6.png" alt="" /></a></li>					
					</ul> -->
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
				<div class="">
					<h4>Newsletter Registration</h4>
					<p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
					<form method="POST" action="<?php echo site_url('Welcome/souscrire')?>">
					<div class="btn-gamp">		
						<input type="text" name="name" class="form-control" id="exampleInputText3" placeholder="Name">
					</div>
					<div class="btn-gamp">		
						<input type="msg" name="msg" class="form-control" id="exampleInputText3" placeholder="Messsage">
					</div>
					<div class="btn-gamp">
						<button type="submit" class="btn btn-default">Subscribe</button>
					</div>
					</form>
			</div>
			
		</div>	
	</footer>
			
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; IMKDesign 2019 by <a target="_blank" href="http://cristalteam.com" title="www.cristalteam.com">cristalteam</a>.<br/>Design by Dan KALOMBO
				</div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Day
                -->
			</div>						
		</div>				
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('Assets/js/jquery.js')?>"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('Assets/js/bootstrap.min.js')?>"></script>	
	<script src="<?php echo base_url('Assets/js/wow.min.js')?>"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>
