<?php
	require "requires/session_check.php";
	
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - MMS</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>-MMS</b></a>
            <small>Mandal Management System</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="post">
                    <div class="msg">Log in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                  
                    <div class="row">
						
                        <div class="col-xs-8 p-t-5">
							<!--
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                            -->
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" name="submit" type="submit">LOG IN</button>
                        </div>
                    </div>
                    
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-in.js"></script>
</body>

</html>
<?php
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			//getting data by post
			require "../requires/functions.php";
			$username=mysql_real_escape_string(test_input($_POST['username']));
			$password=mysql_real_escape_string(test_input($_POST['password']));
			require "../requires/connect.php";
			if($active_account=valid_user($username))
			{
				$test_array=mysql_query("select * from register where id='$userid' and password=md5('$password')");
				$result=mysql_fetch_array($test_array);
				if(!empty($result['id']) && !empty($result['password']))
				{
					date_default_timezone_set("Asia/Calcutta");
					$ip=$_SERVER['REMOTE_ADDR'];
					//getting mac
						
						$mac=mac_address($ip);
						$time=date("h:i:sa");
						$date=date("Y-m-d");
						mysql_query("insert into admin_data (ip,mac,date,time,type) values('$ip','$mac','$date','$time','admin')");
					require '../requires/session.php';
					$_SESSION['username']=$username;
					
					
					header("location:admin_panel.php");
					
				}
				else
				{
					echo "<center><span class='err'>Invalid credinals</span></center>";
				}
			}
		}
	}
	
function valid_user($username)
{
	$array=mysql_query("select * from login where id='$username'");
	$result=mysql_fetch_array($array);
	return empty($result)?0:1;
}
?>
