<?php

				$_SESSION['user_id'] = $user_id;
				$_SESSION['user_fund_id'] = $user_fund_id;
				$_SESSION['username'] = $username; 
				$_SESSION['user_email'] = $user_email; 
				$_SESSION['access_level_id'] =  $access_level_id;
				

				$_SESSION['login_validation'] = 0;           
				$_SESSION['sweet_alert_trigger'] = 'login_alert'; 
                $_SESSION['two_factor'] = 1;



?>