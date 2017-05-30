<?php
print <<<END

        <div class="container-fluid">
 <div class="row clearfix">
END;
require "requires/connect.php";
$query=mysql_query("select * from mandal_details");
$color=["red","cyan","green","orange","blue-grey","pink","light-blue","light-green","amber"];
$i=0;
while($data=mysql_fetch_assoc($query))
{
	echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
		echo '<div class="card">';
			echo '<div class="header bg-'.$color[$i%9].'">';
				echo '<h2>'.$data['m_name'].'<small>No of Villages: '.$data['no_of_villages'].'</small></h2>';
			echo '</div>';
		echo '<div class="body">';
			echo 'Population: '.$data['population']."<br><br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$data['m_about'];
			echo '<br><br>';
			echo '<a target="_blank" href="mandal_schemes.php?id='.$data['m_id'].'">Click here for scheme details</a>';
			echo '<br><br>';
		echo '</div>';
	echo '</div>';
echo '</div>';
	$i++;
}
echo '</div>';
echo '</div>';

?>
