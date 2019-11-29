
<h1>  Welcome</h1> <?php
    echo $this->session->login;
?>
<!-- <a href="<?php //echo site_url('Admin/publications')?>">publication</a> -->
<table class="table  table-bordered table-danger table-striped table-hover">
                    <thead>
                        <tr>
                            <th>N</th>
                            
                            <th>Title</Title></th>
                            <th>Message</th>
                            
                        </tr>
                    </thead>
                    <tbody>
<?php
$i=1;
    foreach($data as $t){
        echo '<tr class="table-active">';
                                echo '<td>'.$i.'</td>'.'<td>'.$t->name.'</td>'.'<td>' .$t->contenu.'</td></tr>';
								$i++;}
?>
					</tbody>
</table>
