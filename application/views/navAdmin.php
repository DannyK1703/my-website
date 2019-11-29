<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMKDesign</title>

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
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<h1>IMKDesign/<?php echo $this->session->login?></h1>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="<?php echo site_url('Admin/admen');?>">Accueil</a></li>
							<li role="presentation"><a href="<?php echo site_url('Admin/newpub');?>">Publication</a></li>
							<li role="presentation"><a href="<?php echo site_url('Admin/real');?>">Realisations</a></li>
            
                            <li role="presentation"><a href="<?php echo site_url('Admin/deconnecter');?>">Se Deconnecter</a></li>						
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
				</nav><!--/nav-->	
				
    </header><!--/header-->	
		
</body>
</html>
