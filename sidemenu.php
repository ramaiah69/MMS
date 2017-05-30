<?php
print <<<END
<div class='menu'>
                <ul class='list'>
                    <li class='header'>MAIN NAVIGATION</li>
                    <li class='active'>
                        <a href='index.php'>
                            <i class='material-icons'>home</i>
                            <span>Home</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href='javascript:void(0);' class='menu-toggle'>
                            <i class='material-icons'>swap_calls</i>
                            <span>Post</span>
                        </a>
                        <ul class='ml-menu'>
                            <li>
                                <a href='pages/ui/alerts.html'>Notification</a>
                            </li>
                            <li>
                                <a href='scheme_statistics.php'>Scheme Details</a>
                            </li>
                            <li>
                                <a href='pages/ui/badges.html'>Badges</a>
                            </li>

                            
                        </ul>
                    </li>
                    <li>
                        <a href='javascript:void(0);' class='menu-toggle'>
                            <i class='material-icons'>assignment</i>
                            <span>Details</span>
                        </a>
                        <ul class='ml-menu'>
                            <li>
                                <a href='scheme_details_update.php'>Schemes</a>
                            </li>
                            <li>
                                <a href='pages/forms/advanced-form-elements.html'>Mandals</a>
                            </li>
                            <li>
                                <a href='pages/forms/form-examples.html'>Villages</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </div>
END;
?>
