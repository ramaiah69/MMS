<?php
print <<<END

        <div class="container-fluid">
 <div class="row clearfix">
END;
require "requires/connect.php";
$query=mysql_query("select * from schemes_details");
$color=["red","cyan","green","orange","blue-grey","pink","light-blue","light-green","amber"];
$i=0;
while($data=mysql_fetch_assoc($query))
{
	echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
		echo '<div class="card">';
			echo '<div style="min-height:100px;max-height:100px" class="header bg-'.$color[$i%9].'">';
							
							echo '	<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>';
                                    echo ' <ul class="dropdown-menu pull-right">';
                                    echo '<li><a target="_blank" href="scheme_details_update.php?id='.$data['id'].'">Edit</a></li>';
									echo '<li><a href="#">Delete</a></li>';
									
                                    echo '</ul>';
                                echo '</li>';
                            echo '</ul>';
                            
				echo '<h2>'.$data['name'].'<small>No of Villages: '.$data['department'].'</small></h2>';
			echo '</div>';
		echo '<div class="body" style="min-height:190px;max-height:190px" >';
		$string=$data['about'];
		$s=substr($string,0,150);
			echo ''.$s."...";
			echo '<br><br>';
			echo '<a target="_blank" href="scheme_details.php?id='.$data['id'].'">Click here for scheme details</a>';
			echo '<br><br>';
		echo '</div>';
	echo '</div>';
echo '</div>';
	$i++;
}
echo '</div>';
echo '</div>';

?>
