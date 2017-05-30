<?php
	
	//Checking authority
	require "requires/session_check.php";
	if($login_entry_status)	
		{
			require "requires/connect.php";
			$username=$_SESSION['username'];
			}
	else
		header("location:login.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | MMS</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- ADMIN Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">ADMIN - MMS</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                  
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
						$query=mysql_query("select * from login where username='$username'");
						$query=mysql_fetch_array($query);
						echo $query['name'];
                    ?></div>
                    <div class="email"><?php echo $query['email']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                           
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Change password</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <?php
					include "side_panel.php";
                ?>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">ADMIN - MMS</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.4
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
           
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
            <div class="body">
                <form id="sign_up" method="post">
                    <div class="msg">POST SCHEME</div><br>
                    <?php
                    
						require "requires/functions.php";
						require "requires/connect.php";
						$id=mysql_real_escape_string(test_input($_GET['id']));
						$mandal=mysql_query("select * from login where username='$username'");
						$mandal=mysql_fetch_array($mandal);
						$m_id=$mandal['m_id'];
						
						$sql="select * from z_scheme_".$id." where m_id='$m_id'";
						$query=mysql_query($sql);
						$data=mysql_fetch_array($query);
						$scheme=mysql_query("select * from schemes_details where id='$id'");
						$scheme=mysql_fetch_array($scheme);
						$scheme_name=$scheme['name'];
                    ?>
					
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
					<div class="form-group form-float">
                        
                        <div class="form-line">
                            <input id="title"type="text" class="form-control" name="name" placeholder="" value="<?php
								echo $scheme_name;
                            ?>" required autofocus>
                            <label class="form-label">Scheme</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <input id="title"type="text" class="form-control" name="p_budget" placeholder="" value="<?php
								echo $data['budget'];
                            ?>" autofocus>
                            <label class="form-label">Previous Budget</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <input id="title"type="text" class="form-control" name="n_budget" placeholder="" value="" required autofocus>
                            <label class="form-label">Newly sansctioned Budget</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <input id="title" type="text" class="form-control" name="percentage" placeholder="" value="" required autofocus>
                            <label class="form-label">Percentage of completeion</label>
                        </div>
                    </div>
                    
					<br>
						<button class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">POST</button>

						<div class="m-t-25 m-b--5 align-center">
						</div>
						</form>
					</div>
				</div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
           
                <!-- #END# Answered Tickets -->
            
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
   

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
       <script src="plugins/jquery-validation/jquery.validate.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
        <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-up.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    <script>
		
		
		document.getElementById('s_procedure').focus();
	</script>
</body>

</html>
<?php


	if(isset($_POST['submit']))
	{
		
		if(!empty($_POST['id']) && !empty($_POST['m_id']) && !empty($_POST['name'])  && !empty($_POST['n_budget']) && !empty($_POST['percentage']))
		{
			
			//getting data by post
			
			$p_budget=mysql_real_escape_string(test_input($_POST['p_budget']));
			$percentage=mysql_real_escape_string(test_input($_POST['percentage']));
			$n_budget=mysql_real_escape_string(test_input($_POST['n_budget']));
			$id=mysql_real_escape_string(test_input($_POST['id']));
			$m_id=mysql_real_escape_string(test_input($_POST['m_id']));
			date_default_timezone_set("Asia/Calcutta");
			$date=date("Y-m-d");
			$ip=$_SERVER['REMOTE_ADDR'];
			//getting mac
			$sql="select * from z_scheme_".$id." where m_id='$m_id'";
			$query=mysql_query($sql);
			$query=mysql_fetch_array($query);
			if($query['id'])
			{
				$sql="select * from z_scheme_".$id." where m_id='$m_id'";
				$a=mysql_query($sql);
				$a=mysql_fetch_array($a);
				$p_budget=$a['budget'];
				$budget=$p_budget+$n_budget;
				$sql="update z_scheme_".$id." set budget='$budget',percentage='$percentage',date='$date' where m_id='$m_id'";
				$query=mysql_query($sql);
				$b=mysql_query("select * from scheme_details where id='$id'");
				$b=mysql_fetch_array($b);
				$budget=$b['total_budget'];
				$budget=$budget+$n_budget;
				$mandals=$b['mandals_using'];
				$people=$b['people_using'];
				$p=mysql_query("select * from mandal_details where m_id='$m_id'");
				$p=mysql_fetch_array($p);
				$old_people=$p['population'];
				$people=$people+$old_people;
				$mandals++;
				$budget=$n_budget;
				$a=mysql_query("update scheme_details set total_budget='$budget',mandals_using='$mandals' where id='$id'");
				if($query)
				{
					echo '<script>alert("Updated Successfully");</script>';
					
				}
				else
				{
					echo 'not posted';
				}
			}
			else
			{
				$a=mysql_query("select * from mandal_details where m_id='$m_id'");
				$a=mysql_fetch_array($a);
				$district=$a['district'];
				echo $district;
				echo $m_id;
				$a=mysql_query("select d_id from district_details where d_name like '$district'");
				$a=mysql_fetch_array($a);
				$d_id=$a['d_id'];
				$sql="insert into z_scheme_".$id." (m_id,d_id,budget,percentage,date) values ('$m_id','$d_id','p_budget','$percentage','$date')";
				$b=mysql_query("select * from scheme_details where id='$id'");
				$b=mysql_fetch_array($b);
				$budget=$b['total_budget'];
				$mandals=$b['mandals_using'];
				$people=$b['people_using'];
				$p=mysql_query("select * from mandal_details where m_id='$m_id'");
				$p=mysql_fetch_array($p);
				$old_people=$p['population'];
				$people=$people+$old_people;
				$mandals++;
				$budget=$budget+$n_budget;
				echo $mandals;
				$a=mysql_query("update scheme_details set budget='$budget',mandals_using='$mandals',people_using='$people',percentage='$percentage',date='$date' where id='$id'");
				$query=mysql_query($sql);
				if($query)
				{
					echo '<script>alert("Posted Successfully");</script>';
					
				}
				else
				{
					echo 'not posted';
				}
				
			}
		}
	}
	
	

?>

