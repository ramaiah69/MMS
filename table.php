<?php

print <<<END

        <div class="container-fluid">
           
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FEEDBACK
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
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Feedback</th>
                                        <th>Send_by</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Feedback</th>
                                        <th>Send_by</th>
                                        <th>Type</th>
                                        
                                    </tr>
                                </tfoot>

END;
echo "<tbody>";
require "requires/connect.php";
$query=mysql_query("select * from feedback");
$i=1;
while($data=mysql_fetch_assoc($query))
{
	echo '<tr>';
	echo '<td>'.$i.'</td>';
	echo '<td>'.$data['data'].'</td>';
	echo '<td>'.$data['sendby'].'</td>';
	echo '<td>'.$data['type'].'</td>';
	echo '</tr>';
	$i++;
}
echo "</tbody>";
echo "</table>";
print <<<END
                              
							
					</div>
				</div>
			</div>
		</div>
	</div>
END;
?>
