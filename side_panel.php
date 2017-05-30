<?php
	 if($login_entry_status)
	 {
		 $username=$_SESSION['username'];
		 $m_id=$_SESSION['m_id'];
		 $d_id=$_SESSION['d_id'];
		 $type=getHost($username);
		 if($type=='admin')
		 {
			 include "admin_view/admin_view.php";
		 }
		 else if($type='mro')
		 {
			 include "admin_view/mro_view.php";
		 }
	 }
	 else
	 {
		 header("login.php");
	 }
	function getHost($username)
	{
		require "requires/connect.php";
		$query=mysql_query("select * from login where username='$username'");
		$query=mysql_fetch_array($query);
		return $query['type'];
	}
?>
