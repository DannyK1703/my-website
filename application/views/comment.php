<link href="<?php echo base_url('Assets/css/mdb.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('Assets/css/style.css');?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('Assets/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('Assets/css/animate.css')?>">
		<link href="<?php echo base_url('Assets/css/animate.min.css')?>" rel="stylesheet"> 
		<body>
		<nav class="navbar navbar-dark ">

    <!-- Collapse button-->
    

    <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx3">
            <!--Navbar Brand-->
            <a class="navbar-brand">IMK Design/Commentaire</a>
            <!--Links-->
            <ul class="nav navbar-nav">
                
                <li class="nav-item">
                    <a href="<?php echo site_url('Welcome/index')?>"class="nav-link">Retour</a>
                </li>
</ul> 
        </div>
        <!--/.Collapse content-->

    </div>

</nav>
<!--/.Navbar-->
		<div class="col-md-12">
		
<?php 
	foreach($data as $ty){
		echo '
			
		<div class="media">
		<a class="media-left waves-light">
			<img class="rounded-circle" src="http://mdbootstrap.com/wp-content/uploads/2015/10/team-avatar-1.jpg" alt="Generic placeholder image">
		</a>
				<div class="media-body">
					<h4 class="media-heading">'.$ty->name.'</h4>
					<ul class="rating inline-ul">
						<li><i class="fa fa-star amber-text"></i></li>
						<li><i class="fa fa-star amber-text"></i></li>
						<li><i class="fa fa-star amber-text"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
					</ul>
					<p>'.$ty->contenu.'</p>
				</div>
				</div>';

				
	}
?>
</div>
