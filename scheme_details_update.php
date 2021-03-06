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
						$id=mysql_real_escape_string(test_input($_GET['id']));
						$query=mysql_query("select * from scheme_details where id='$id'");
						$data=mysql_fetch_array($query);
                    ?>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
					<div class="form-group form-float">
                        
                        <div class="form-line">
                            <input id="title"type="text" class="form-control" name="title" placeholder="" value="<?php
								echo $data['name'];
                            ?>" required autofocus>
                            <label class="form-label">Title</label>
                        </div>
                    </div>
                     <div class="form-group form-float">
                        
                        <div class="form-line">
                            <textarea  class="form-control" id="about" name="about" placeholder="" required autofocus rows="7" cols="2"><?php
								echo $data['about'];
                            ?></textarea>
                            <label class="form-label">About</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <textarea  class="form-control" id="s_procedure" name="s_procedure" placeholder="" required autofocus rows="7" cols="2"><?php
								echo $data['s_procedure'];
                            ?></textarea>
                            <label class="form-label">Procedure</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <input type="date" class="form-control" name="date" placeholder="" value="<?php
								echo $data['starting_date'];
                            ?>" required autofocus>
                            <label class="form-label">Date</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <input type="text" class="form-control" name="budget" placeholder="" value="<?php
								echo $data['total_budget'];
                            ?>" required autofocus>
                            <label class="form-label">Budget</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <input type="text" class="form-control" name="status" placeholder="" value="<?php
								echo $data['status'];
                            ?>" required autofocus>
                            <label class="form-label">Date</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        
                        <div class="form-line">
                            <textarea type="text" class="form-control" name="officials" placeholder="" rows="3" cols="" value=""required autofocus><?php
								echo $data['officials'];
                            ?></textarea>
                            <label class="form-label">Officials</label>
                        </div>
                    </div>
                     <div class="form-group form-float">
                        
                        <div class="form-line">
                            <textarea type="text" class="form-control" name="website" placeholder="" rows="3" cols="" value=""required autofocus><?php
								echo $data['website'];
                            ?></textarea>
                            <label class="form-label">Website</label>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        
                        <div class="form-line">
                           <select name="department" class="form-control">
								
							   <?php
									echo '<option name="department" value="'.$data['department'].'" selected>'.$data['department'].'</option>';
									require "requires/connect.php";
									$query=mysql_query("select * from scheme_departments");
									while($data=mysql_fetch_assoc($query))
									{
										echo '<option name="department" value="'.$data['name'].'">'.$data['name'].'</option>';
									}
							   ?>
                           </select>
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
		
		if(!empty($_POST['title']) && !empty($_POST['about']) && !empty($_POST['date']) && !empty($_POST['s_procedure']) && !empty($_POST['budget']) && !empty($_POST['status']) && !empty($_POST['officials']) && !empty($_POST['website']) && !empty($_POST['department']))
		{
			echo 'a';
			//getting data by post
			$id=mysql_real_escape_string(test_input($_POST['id']));
			$title=mysql_real_escape_string(test_input($_POST['title']));
			$about=mysql_real_escape_string(test_input($_POST['about']));
			$date=mysql_real_escape_string(test_input($_POST['date']));
			$s_procedure=mysql_real_escape_string(test_input($_POST['s_procedure']));
			$budget=mysql_real_escape_string(test_input($_POST['budget']));
			$status=mysql_real_escape_string(test_input($_POST['status']));
			$officials=mysql_real_escape_string(test_input($_POST['officials']));
			$website=mysql_real_escape_string(test_input($_POST['website']));
			$department=mysql_real_escape_string(test_input($_POST['department']));
			
			
		
			date_default_timezone_set("Asia/Calcutta");
			$ip=$_SERVER['REMOTE_ADDR'];
			//getting mac
			
			$query=mysql_query("update scheme_details set name='$title',starting_date='$date',about='$about',s_procedure='$s_procedure',total_budget='$budget',status='$status',officials='$officials',website='$website',department='$department' where id='$id'");
			
			if($query)
			{
				echo '<script>alert("Updated Successfully");</script>';
				
			}
			else
			{
				echo 'not posted';
			}
		}
	}
	
	

?>

