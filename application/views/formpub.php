
<!DOCTYPE html>
<html lang="en">

<head>

    
    <!-- Material Design Bootstrap -->
	
	<link href="<?php echo base_url('Assets/css/style.css');?>" rel="stylesheet">
	<link href="<?php //echo base_url('Assets/css/bootstrap.css')?>" rel="stylesheet">
</head>

<body class="hidden-sn mdb-skin">

    <!--Double navigation-->
    <header>




<main>
        <div class="container ">

           
            <br><br>
            <!--Form with header-->
			<form  method="POST"  action="<?php echo site_url('Admin/publier/');?>">
                    <div class="card">
                        <div class="card-body">
                    
                            <!--Header-->
                            
                    
                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                               
                                <input type="text" name="titre" placeholder="titre"  id="form3" class="form-control" required/>
                                
                                <!-- <label for="form3">Username ou login</label> -->
                            </div>
                           
                            <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="description" name="description" placeholder="description" " id="form2" class="form-control" required>
                            
                           

                            <!-- <label for="form2">Mot de passe</label> -->
                        </div>
                    
                            <div class="text-xs-center ">
                            <button class="btn red-gradient" type=submit >Valider</button>
                                
                            </div>
                    
                        </div>
                    </div>
                </form>
            <!--/Form with header-->

            <!-- <div style="height: 2000px"></div> -->

            <!--Footer-->
               
            <!--/.Footer-->

        </div>
    </main>


    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    
</body>

</html> 
