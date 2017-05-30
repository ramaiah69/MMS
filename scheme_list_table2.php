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

                                 $a=mysql_query("select count(*) from scheme_details");
                                 $b=mysql_query("select sum(total_budget) from scheme_details");
                                 $a=mysql_fetch_array($a);
                                 $b=mysql_fetch_array($b);
                                 echo "<h2>SCHEMES</h2>";

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
echo '<label>Total Schemes: '.$a[0].'</label>';
echo '<label class="right">Total Money unber schemes: '.$b[0].'</label><hr>';

//echo '<label>Tota Details:</label>';
ECHO '<BR>';
print <<<END
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Scheme</th>
                                        <th>Budget</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Scheme</th>
                                        <th>Budget</th>
                                    </tr>
                                </tfoot>

END;
echo "<tbody>";
require "requires/connect.php";

$b=mysql_query("select * from schemes_details");
$i=0;



	while($data=mysql_fetch_assoc($b))
	{
		
		
			
			echo '<tr>';
			echo '<td>'.++$i.'</td>';
			echo '<td><a target="_blank" href="scheme_mandal_update.php?id='.$data['id'].'">'.$data['name'].'</a></td>';
			echo '<td>'.$data['Total_budget'].'</td>';
			
			echo '</tr>';
			$total=1;
		
	}
if($total==0)
{
	echo '<tr><td><b style="color:red">There is no schemes.</b></td><td>--</td><td>--</td></tr>';
}
echo "</tbody>";
echo "</table>";
echo '<br>';

print <<<END
                              
							
					</div>
				</div>
			</div>
		</div>
	</div>
END;
?>
