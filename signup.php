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
    <title>Sign Up | Bootstrap Based Admin Template - MMS</title>
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

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>-MMS</b></a>
            <small>Mandal Management System</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <div class="msg">Register</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Name Surname" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
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
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                           <select name="district" class="form-control">
							<option name="district"  selected>Select District</option>
							<?php
								require "requires/connect.php";
								$a=mysql_query("select * from district_details");
								while($data=mysql_fetch_assoc($a))
								{
									echo '<option name="district" value="'.$data['d_name'].'" >'.$data['d_name'].'</option>';
								}
							?>
                           </select>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                           <select name="mandal" class="form-control">
							<option name="mandal"  selected>Select Mandal</option>
							<?php
								require "requires/connect.php";
								$a=mysql_query("select * from mandal_details where district like 'krishna'");
								while($data=mysql_fetch_assoc($a))
								{
									echo '<option name="mandal" value="'.$data['m_name'].'" >'.$data['m_name'].'</option>';
								}
							?>
                           </select>
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
                    <!--
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>
                    -->

                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">Register</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="login.php">If you already registered?</a>
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
    <script src="js/pages/examples/sign-up.js"></script>
</body>

</html>
<?php
	if(isset($_POST['submit']))
	{
		
		if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['confirm']) && !empty($_POST['confirm']) && !empty($_POST['mandal']) && !empty($_POST['district']) && !empty($_POST['question']) && !empty($_POST['answer']))
		{
			
			//getting data by post
			require "requires/functions.php";
			$name=mysql_real_escape_string(test_input($_POST['name']));
			$password=mysql_real_escape_string(test_input($_POST['password']));
			$confirm=mysql_real_escape_string(test_input($_POST['confirm']));
			$email=mysql_real_escape_string(test_input($_POST['email']));
			$question=mysql_real_escape_string(test_input($_POST['question']));
			$answer=mysql_real_escape_string(test_input($_POST['answer']));
			$mandal=mysql_real_escape_string(test_input($_POST['mandal']));
			
				if($password == $confirm)
				{
					date_default_timezone_set("Asia/Calcutta");
					$ip=$_SERVER['REMOTE_ADDR'];
					//getting mac
						$a=mysql_query("select * from mandal_details where m_name like '$mandal'");
						$a=mysql_fetch_array($a);
						$m_id=$a['m_id'];
						$mac=mac_address($ip);
						$query=mysql_query("insert into login (username,name,password,email,allow,question,answer,m_id) values('$email','$name','$password','$email','0','$question','$answer','$m_id')");
						$date=date("Y-m-d H:i:s");
						$query2=mysql_query("insert into admin_data (ip,mac,date,type) values('$ip','$mac','$date','admin')");
						if($query2 && $query)
						{
							echo '<script>alert("Registered Successfully");</script>';
						}
						else
						{
							echo 'not registered';
						}
				}
				else
				{
					echo "<center><span class='err'><b style='color:white'>Invalid credinals</b></span></center>";
				}
			
		}
	}
	

?>
