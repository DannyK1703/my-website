<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>health Peoximity Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css');?>">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('asset/css/mdb.css');?>" rel="stylesheet">

</head>

<body class="hidden-sn mdb-skin">

    <!--Double navigation-->
    <header>




<main>
        <div class="container ">

           
            <br><br>
            <!--Form with header-->
                <form  method="POST"  action="<?php echo site_url('Admin/confirmer/');?>">
                    <div class="card">
                        <div class="card-block">
                    
                            <!--Header-->
                            <div class="form-header blue-gradient">
                                <h3><i class="fa fa-user"></i> Connexion Admin</h3>
                            </div>
                    
                            <!--Body-->
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                               
                                <input type="text" name="login" placeholder="login" value="<?php echo set_value('login')?>" id="form3" class="form-control" required/>
                                <?php echo form_error('login','<em>','</em>') ?>
                                <label for="form3">Username ou login</label>
                            </div>
                           
                            <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" name="mdp" placeholder="mot de passe" value="<?php echo set_value('nmdp');?>" id="form2" class="form-control" required>
                            <?php echo form_error('mdp','<em>','</em>') ?>
                           

                            <label for="form2">Mot de passe</label>
                        </div>
                    
                            <div class="text-xs-center ">
                            <button class="btn   red-gradient" type=submit >Connexion</button>
                                
                            </div>
                    
                        </div>
                    </div>
                </form>
            <!--/Form with header-->

            <!-- <div style="height: 2000px"></div> -->

            <!--Footer-->
                <footer class="page-footer blue center-on-small-only  blue-gradient">

                    

                    <!--Copyright-->
                        <div class="footer-copyright">
                            <div class="container-fluid">
                                <em>by Dan KALOMBO</em> © 2019 Copyright: <a href="www.cristalteam.com">Cristalteam </a><br/>

                            </div>
                        </div>
                    <!--/.Copyright-->

                </footer>
            <!--/.Footer-->

        </div>
    </main>


    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery-3.1.1.min.js')?>"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/tether.min.js')?>"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/mdb.js')?>"></script>

    <script>
        // SideNav init
        $(".button-collapse").sideNav();

        // Custom scrollbar init
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

</body>

</html> 