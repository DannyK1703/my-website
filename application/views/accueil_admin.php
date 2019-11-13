<h1>  Welcome</h1> <?php
    echo $this->session->login;
?>
<a href="<?php echo site_url('Admin/publications')?>">publication</a>

<?php
    foreach($data as $t){
        echo $t->name.' : '.$t->contenu;
    }
?>