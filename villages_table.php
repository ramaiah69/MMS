<?php
error_reporting(0);
print <<<END

        <div class="container-fluid">
           
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
                    <div class="card">
                        <div class="header">
                            
END;
$id=$_GET['id'];
echo '<b>Total Village Details:</b>';
                                 $a=mysql_query("select * from mandal_details where m_id='38'");
                                 $a=mysql_fetch_array($a);
                                 echo "<h2><small>Mandal: </small><b>".$a['m_name']."</b></h2>";

print <<<END
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
END;
echo '<label>Total population in mandal: '.$a['population'].'</label>';
echo '<label class="right">No of villages: '.$a['no_of_villages'].'</label><hr>';

echo '<label>Schemes Details:</label><BR><BR>';
print <<<END
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Village</th>
                                        <th>Population</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Village</th>
                                        <th>Population</th>
                                    </tr>
                                </tfoot>

END;
echo "<tbody>";
require "requires/connect.php";

$b=mysql_query("select * from village_details");

$i=0;


	while($data=mysql_fetch_assoc($b))
	{
		

			echo '<tr>';
			echo '<td>'.++$i.'</td>';
			echo '<td>'.$data['v_name'].'</td>';
			echo '<td>'.$data['v_population'].'</td>';
			
			echo '</tr>';
			$total=1;
		
	}
if($total==0)
{
	echo '<tr><td><b style="color:red">There is no schemes.</b></td><td>--</td><td>--</td></tr>';
}
echo "</tbody>";
echo "</table>";
echo "<hr><b>About:</b>";
$a=mysql_query("select * from mandal_details where m_id='$id'");
$a=mysql_fetch_array($a);
echo "<br><br>";


print <<<END
                              
							
					</div>
				</div>
			</div>
		</div>
	</div>
END;
?>
