
 <!--  ----------INSERT DATA--------------  -->

 <?php
        include "connection.php";

        ?>

     <?php

        if(isset($_POST['snow']))
        {
            $insert=0;
            $name=$_POST['fname'];
            $uname=$_POST['uname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];

            $insertData = " INSERT INTO `signup`(`first_name`, `user_name`, `email`, `password`, `confirm_password`) VALUES ('$name','$uname','$email','$password','$cpassword'); ";

            $result = mysqli_query($check,$insertData);

            if($result)
            {
                $insert=1;
                header('location:login.php');
            }
            if($insert)
            {
                echo '<div class="alert alert-info">
                <strong>Sign-up Successful</strong></div>';
            }
            else
            {
                echo '<div class="alert alert-danger">
                <strong>Not Successful</strong></div>';
            }
        }
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="sign_up.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Londrina+Outline&family=Protest+Strike&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<?php
     
?>
    <!-- FORM VALIDATION -->
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $name;$uname;$email;$password;$cpassword;
            $name=$_POST['fname'];
            $uname=$_POST['uname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];

            if(empty($name))
            {
                ?>
                <script>
                    alert("Name Must Required");
                    window.alert = null;
                </script>
                <?php
            }
            else
            {
                if(!preg_match("/^[a-zA-z ]*$/",$name))
                {
                    ?>
                    <script>
                        alert("Only Aplhabet are allowed in Name");
                        window.alert = null;
                    </script>
                    <?php
                }
            }

            if(empty($uname))
            {
                ?>
                <script>
                    alert("Username Must Required");
                    window.alert = null;
                </script>
                <?php
            }
            else
            {
                if(!preg_match("/^[a-zA-z0-9]*$/",$uname))
                {
                    ?>
                    <script>
                        alert("Only Aplhabet and Numbers are allowed in Username");
                        window.alert = null;
                    </script>
                    <?php
                }
            }
            if(empty($email))
            {
                ?>
                <script>
                    alert("Email Must Required");
                    window.alert = null;
                </script>
                <?php
            }
            else
            {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    ?>
                    <script>
                        alert("Please enter valid Email");
                        window.alert = null;
                    </script>
                    <?php
                }
            }
            if(empty($password))
            {
                ?>
                <script>
                    alert("Password Must Required");
                    window.alert = null;
                </script>
                <?php
            }
            if(empty($cpassword))
            {
                ?>
                <script>
                    alert("Confirm Password Must Required");
                    window.alert = null;
                </script>
                <?php
            }
            else
            {
                if($password!=$cpassword)
                {
                    ?>
                    <script>
                        alert("Password and Confirm Password are not same");
                    </script>
                    <?php
                }
            }
        }
    ?>


    <!-- FORM -->

    <div class="form_conatiner">
        <h1 class="header">Signup</h1>
        <form action="sign_up.php" method="post">
            <label for="fname"></label>
            <input type="text" id="fname" name="fname" placeholder="First Name" autocomplete="off">
                <br>
                <br>
            <label for="uname"></label>
            <input type="text" id="uname" name="uname" placeholder="Username" autocomplete="off">
                <br>
                <br>
            <label for="email"></label>
            <input type="text" id="email" name="email" placeholder="Email" autocomplete="off">
                <br>
                <br>
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Password" autocomplete="off">
                <br>
                <br>
            <label for="cpassword"></label>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
                <br>
                <br>
            <input type="submit" value="Sign-up" class="submit" name="snow">
        </form>
    </div>


    
</body>
</html>