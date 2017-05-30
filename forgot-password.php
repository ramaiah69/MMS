<?php
	require "requires/session_check.php";
	if($login_entry_status)	
		{
			header("location:index.php");
		}
	else
		{
			require "requires/connect.php";
			date_default_timezone_set("Asia/Calcutta");
			$date=date("Y-m-d H:i:s");
			
			$ip=$_SERVER['REMOTE_ADDR'];
			//getting mac
			require "requires/mac_address.php";
			$mac=mac_address($ip);
			mysql_query("insert into admin_data (ip,mac,date,type) values ('$ip','$mac','$date','login')");
			
		}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Forgot Password | MMS</title>
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

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>-MMS</b></a>
            <small>Admin BootStrap Based - MMS</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST">
                    <div class="msg">
                        Please enter details to recover password
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                           <select name="question" class="form-control">
							<option name="question"  selected>Select Security Question</option>
							<option name="question" value="1">What is your pet name</option>
							<option name="question" value="2">What is your best friend</option>
							
                           </select>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="answer"  placeholder="Answer" required>
                        </div>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="New Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <button name="submit" class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="login.php">Log In!</a>
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
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/forgot-password.js"></script>
</body>

</html>
<?php
	if(isset($_POST['submit']))
	{
		
		if( !empty($_POST['password']) && !empty($_POST['confirm']) && !empty($_POST['email']) && !empty($_POST['question']) && !empty($_POST['answer']))
		{
			echo 's';
			//getting data by post
			require "requires/functions.php";
			$password=mysql_real_escape_string(test_input($_POST['password']));
			$confirm=mysql_real_escape_string(test_input($_POST['confirm']));
			$email=mysql_real_escape_string(test_input($_POST['email']));
			$question=mysql_real_escape_string(test_input($_POST['question']));
			$answer=mysql_real_escape_string(test_input($_POST['answer']));
			require "requires/connect.php";
				if($password == $confirm)
				{
					date_default_timezone_set("Asia/Calcutta");
					$ip=$_SERVER['REMOTE_ADDR'];
					//getting mac
						
						$mac=mac_address($ip);
						$query=mysql_query("update login set password='$password' where username='$email'");
						$date=date("Y-m-d H:i:s");
						if($query)
						{
							echo '<script>alert("Updated Successfully");</script>';
						}
						else
						{
							echo 'not updated';
						}
				}
				else
				{
					echo "<center><span class='err'><b style='color:white'>Invalid credinals</b></span></center>";
				}
			
		}
	}
	

?>

