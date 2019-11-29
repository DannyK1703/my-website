<h1> vuepub</h1>

<a href="<?php echo site_url('Admin/newpub')?>">newpub</a>
<?php 
    foreach($data as $a){
        echo $a->name.'<br/>';
    }
?>