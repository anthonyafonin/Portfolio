
<?php 

//Username and password values stored in variables
$user = $_POST['user'];
$pass = $_POST['pass'];
        
        //Admin and Crew user front pages stored in variables
        $adminPage = "adminFrontPage.php";
        $crewPage = "views/crewViews.php";
        
        //2 sets of usernames and passwords initialized as "admin" and "crew"
        $adminUser = "admin";
        $adminPass = "password";
        $crewUser = "crew";
        $crewPass = "guest";
    
        //If username and password input = stored admin username and password
        if (($user == $adminUser) && ($pass == $adminPass))
        {
            //Then redirects to the Admin Front Page
            header("Location: " . $adminPage);
            exit;
        }
            
        //If username and password input = stored crew username and password
        if (($user == $crewUser) && ($pass == $crewPass))
        {
            //Then redirect to Crew Front Page
            header("Location: " . $crewPage);
            exit;
         }    
    
        //Otherwise returns a popup alert of "Invalid Username or Password"
        else 
        {
            echo '<script type="text/javascript">alert("Invalid Username or Password");</script>';
        }
    }
?>