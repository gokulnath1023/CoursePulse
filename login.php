<?php
    session_start();
    include("database/dbcon.php");
    

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($user_name)&&!empty($email)&& !empty($password)&&!is_numeric($email))
        {
            $query = "select * from user where email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location : dashboard.php");
                        die;
                    }

                }
            }
            echo "<script type='text/javascript'>alart('Successfully login')</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alart('login fail')</script>";
        }
        
    }
    // if(isset($_POST['submit'])){
    //     $email = mysqli_real_escape_string($con,$_POST['email']);
    //     $pass = mysqli_real_escape_string($con, md5($_POST['password']));

    //     $select = mysqli_query($con, "SELETC * FROM 'user' WHERE email = '$email'  AND password = '$pass'"  );
    //     if(mysqli_num_rows($select)> 0){
    //         $row = mysqli_fetch_assoc($select);
    //         $_SESSION['email'] = $row['email'];
    //         header('location:index.php');
    //     }
    //     else{
    //         $message[] = 'incorrect email';
    //     }
    // }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body class="reg_body">
    <nav class="navbar">
        <img src="images/logo.png" alt="" onclick="home();">
        <ul class="navbar-ul1">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
            <li onclick="account();"><i class="fa-solid fa-user"></i></li>
        </ul>
    </nav>
    <div class="reg">
        <div class="reg_div2">
        <form method="POST">
            <!-- <label>User Name:</label>
            <input type="text" name="user_name"> -->
            <label>Email:</label>
            <input type="email" name="email">
            <label>Password:</label>
            <input type="text" name="password"><br>
            <input type="submit" value="submit" name="submit">
            <a href="register.php"><p>Register</p></a>
                
            </form>
        </div>
    </div>




    <footer class="footer1">
        <div class="fo_div1">
        <ul class="fo_menu">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
        </ul>
        </div>
        <address class="fo_addr">
            <h3>Address</h3>
            12, North Street,<br>
            Ellappanpettai,<br>
            kurinjipadi,<br>
            cuddalore,<br>
            607302
        </address>
        <div class="fo_div2">
            <h3>Community</h3>
            <li>Learners</li>
            <li>Teachers</li>
            <li>Partners</li>
            <li>Placement</li>
        </div>
    </footer>
    <footer class="footer2">
        <p>&copy; <span id="cyear"></span> CoursPulse All rights powered by Members</p>
    </footer>


    <script src="script.js">

    </script>
</body>
</html>