<?php
	 if($login_entry_status)
	 {
		
	 }
	 else
	 {
		 header("login.php");
	 }
echo '<ul class="list">';
echo '<li class="header">MAIN NAVIGATION</li>';
                    echo '<li class="active">';
                        echo '<a href="index.php">';
                            echo '<i class="material-icons">home</i>';
                            echo '<span>Home</span>';
                        echo '</a>';
                    echo '</li>';
                   
                    echo '<li>';
                        echo '<a href="javascript:void(0);" class="menu-toggle">';
                            echo '<i class="material-icons">swap_calls</i>';
                            echo '<span>Post</span>';
                        echo '</a>';
                        echo '<ul class="ml-menu">';
                            echo '<li>';
                                echo '<a href="notification_post.php">Notification</a>';
                            echo '</li>';
                            echo '<li>';
                                echo '<a href="scheme_details_post.php">Scheme</a>';
                            echo '</li>';    
                        echo '</ul>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="javascript:void(0);" class="menu-toggle">';
                            echo '<i class="material-icons">assignment</i>';
                            echo '<span>Details</span>';
                        echo '</a>';
                        echo '<ul class="ml-menu">';
                            echo '<li>';
                                echo '<a href="schemes.php">Schemes</a>';
                            echo '</li>';
                            echo '<li>';
                                echo '<a href="schemes_list.php">Schemes list</a>';
                            echo '</li>';
                            echo '<li>';
                                echo '<a href="mandals.php">Mandals</a>';
                            echo '</li>';
                            echo '<li>';
                                echo '<a href="mandals_list.php">Mandals list</a>';
                            echo '</li>';
                            
                            echo '<li>';
                                echo '<a href="villages.php">Villages</a>';
                            echo '</li>';
                            
                        echo '</ul>';
                    echo '</li>';
                    
                echo '</ul>';
?>
