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
  <?php include("navbar.php")?>
	<div class="gallery">
		<div class="text-center">
			<h2>Gallery</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi,<br> dolores obcaecati ex aliquid, dolor provident </p>
		</div>
		<div class="container">	
		<?php
			echo '<div class="col-md-4">';
			echo '	<figure class="effect-marley">';
			echo '<img src="'. base_url('Assets/img/8.jpg').'" alt="" class="img-responsive"/>';
			echo '<figcaption>';
			echo '<h4>sweet marley</h4>
			<p>Marley tried to convince her but she was not interested.</p>				
		</figcaption>			
	</figure>
</div>';

		?>	
			
			
					
						
			
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="<?php echo base_url('Assets/img/9.jpg')?>" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="<?php echo base_url('Assets/img/10.jpg')?>" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
		
		<div class="container">
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="<?php echo base_url('Assets/img/11.jpg')?>" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="<?php echo base_url('Assets/img/12.jpg')?>" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="<?php echo base_url('Assets/img/13.jpg')?>" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
	</div>	
	
	<?php include_once("footer.php")?>