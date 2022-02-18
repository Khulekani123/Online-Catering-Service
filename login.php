<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "with=device-width, initial-scale=1.0">
        <title> Online Catering Service</title>
        <link rel ="stylesheet" href="style.css">
    </head>

    <body>
        <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
            <div class="container d-flex">
                <div class="contact-info mr-auto">
                    <p>
                       " Stay safe! Visit "
                        <a href="https://sacoronavirus.co.za/" style = "color:white" target= "_blank"> sacoronavirus.co.za</a> " for official COVID-19 information. "
                    </p>
                </div>
            </div>
        </div>
        <section class = "header">
            <nav class="navbar navbar-custom">
                <div class = "nav-links">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="">OUR SERVICES</a></li>
                        <li id = "header-logo" class>
                         <div class = "header-logo-section">
                           <div class = "logo">
                           <a href = "index.php">
                           <img class = "logo-theme-main logo-theme-custom" src="wed/pundrulu.png" alt ="logo">
                           </a>
                           </div>
                         </div>
                       </li>
                        <li><a href="footer.php">ABOUT US</a></li>
                        <li><a href="login.php">BOOK US</a></li>
                    </ul>
                </div>
            </nav>
        </section>
     <div class = "background">
         <div class = "form-box">
             <div class = "button-box">
                 <div id="btn"></div>
                 <button type = "button" class="toggle-btn" onclick="login()"> Log In </button>
                 <button type = "button" class="toggle-btn" onclick="register()"> Register </button>
             </div>
             <?php
             /*
             require('conn.php');
             if(isset($_POST['user_Email'])){
                $user_Email        = stripslashes($_REQUEST['user_Email']);
                $user_Email        = mysqli_real_escape_string($dbcon ,$user_Email);
                $user_password     = stripslashes($_REQUEST['user_password']);
                $user_password     = mysqli_real_escape_string($dbcon ,$user_password);

                $query = "SELECT * FROM 'users' WHERE user_Email = '$user_Email' AND user_password ='" .md5($user_password). "'";
                $result = mysqli_query($dbcon, $query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                if($rows == 1){
                    $_SESSION['user_Email']= $user_Email;
                    header("Location: booking.php");
                } else {
                    echo "<div class = 'form'>
                    <h3>Incorect Username/Password.</h3><br/>
                    </div>";
                }
            } else { */
                ?>
            <form action = "loginBackend.php" method = "POST" id="login" class= "input-group">
                <input type= "email"  name = "user_Email" class= "input-field" placeholder= "Email" required>
                <input type= "password" name = "user_password" class= "input-field" placeholder= "Enter Password" required>
                <input type= "checkbox" class= "check-box"> <span> Remember Password </span>
                <input type= "submit" name = "login" class= "submit-btn" value = "Log In">
            </form>
            
            <?php
            /*
             require('conn.php');
             if (isset($_REQUEST['user_Email'])){
                 $user_Fname        = stripslashes($_REQUEST['user_Fname']);
                 $user_Fname        = mysqli_real_escape_string($dbcon ,$user_Fname);
                 $user_Lname        = stripslashes($_REQUEST['user_Lname']);
                 $user_Lname        = mysqli_real_escape_string($dbcon ,$user_Lname);
                 $user_Email        = stripslashes($_REQUEST['user_Email']);
                 $user_Email        = mysqli_real_escape_string($dbcon ,$user_Email);
                 $user_Contact      = stripslashes($_REQUEST['user_Contact']);
                 $user_Contact      = mysqli_real_escape_string($dbcon ,$user_Contact);
                 $user_Province     = stripslashes($_REQUEST['user_Province']);
                 $user_Province     = mysqli_real_escape_string($dbcon ,$user_Province);
                 $town              = stripslashes($_REQUEST['town']);
                 $town              = mysqli_real_escape_string($dbcon ,$town);
                 $user_password     = stripslashes($_REQUEST['user_password']);
                 $user_password     = mysqli_real_escape_string($dbcon ,$user_password);
                
                 $query = "INSERT INTO `catering_db`.`user` (`user_ID`, `user_Fname`, `user_Lname`, `user_Email`, `user_Contact`, `user_Province`, `town`, `user_password`) 
                        VALUES (NULL, '$user_Fname ', '$user_Lname ', '$user_Email', '$user_Contact', '$user_Province', '$town', '$user_password')";
                 $result = mysqli_query($dbcon, $query);
                 if ($result){
                     echo "<div class = 'form'>
                            <h3> You are registered successfully.</h3><br>/>
                            </div>";
                 }else{
                     echo "<div class = 'form'>
                     <h3>Required fields missing</h3>
                     </div>";
                 }
                }else{*/
                    ?>
            <form action = "registerBackend.php" method = "POST" id="register"  class= "input-group">
                <input type= "text" name = "user_Fname" class= "input-field" placeholder= "First name" required>
                <input type= "text" name = "user_Lname" class= "input-field" placeholder= "Last name" required>
                <input type= "email" name = "user_Email" class= "input-field" placeholder= "Email" required>
                <input type= "text" name = "user_Contact" class= "input-field" placeholder= "Contact" required>
                <input type= "text" name = "user_Province" class= "input-field" placeholder= "Province" required>
                <input type= "text" name = "town" class= "input-field" placeholder= "Town" required>
                <input type= "password" name = "user_password" class= "input-field" placeholder= "Password" required>
                <input type= "checkbox" class= "check-box"> <span> I agree to the terms & conditions.</span>
                <input type= "submit" name = "create" class= "submit-btn" value = "Submit">
            </form>
         </div>
    
     </div>

     <script>
         var x = document.getElementById("login");
         var y = document.getElementById("register");
         var z = document.getElementById("btn");

         function register(){
             x.style.left = "-400px";
             y.style.left = "50px";
             z.style.left = "110px";
         }

         function login(){
             x.style.left = "50px";
             y.style.left = "450px";
             z.style.left = "0px";
         }

     </script>
    </body>
</html>

