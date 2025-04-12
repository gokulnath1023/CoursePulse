
<?php
    require("functions.php")

?>
<?php
    $course_shuffle=$course->getData();
    $course_id=$_GET['course_id']??1;
    foreach($course->getData() as $course):
        if($course['course_id']==$course_id):
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    

    <title><?php echo $course['course_name']??"Unknown"?> By CoursPulse</title>
</head>
<body>
    <nav class="navbar">
        <a href="index.php"><img src="images/logo.png" alt=""></a>
        <ul class="navbar-ul1">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
            <li onclick="account();"><i class="fa-solid fa-user"></i></li>
            <li></li>
        </ul>
    </nav>
    
    <div class="row lesson_continer1">
        <div class="col lesson_continer11 ">
            <img src="<?php echo $course['course_image']??".images\html.jpg"?>" alt="">
        </div>
        <div class="col lesson_continer12 ">
            <h1><?php echo $course['course_name']??"Unknown"?></h1>
            <a href="<?php printf('%s?course_id=%s','course_video.php',$course['course_id']); ?>"><button><i class="fa-solid fa-book"></i>&nbsp Start Course</button></a>
            
        </div>
    </div>
    <div class="lesson_continer2">
        <h1><?php echo $course['course_name']??"Unknown"?></h1>
        <p><?php echo $course['course_description']??"Unknown"?></p>
        <div>
            <div>
                <h3><?php echo $course['course_lessson1']??"Unknown"?></h3>
                <p><li><?php echo $course['course_lessson1_description']??"Unknown"?></li></p>
            </div>
            <div>
                <h3><?php echo $course['course_lessson2']??"Unknown"?></h3>
                <p><li><?php echo $course['course_lessson2_description']??"Unknown"?></li></p> 
            </div>
            <div>
                <h3><?php echo $course['course_lessson3']??"Unknown"?></h3>
                <p><li><?php echo $course['course_lessson3_description']??"Unknown"?></li></p>  
            </div>
            <div>
                <h3><?php echo $course['course_lessson4']??"Unknown"?></h3>
                <p><li><?php echo $course['course_lessson4_description']??"Unknown"?></li></p>
            </div>
            <div>
                <h3><?php echo $course['course_lessson5']??"Unknown"?></h3>
                <p><li><?php echo $course['course_lessson5_description']??"Unknown"?></li></p>
            </div>
            
            
            
            
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
<?php
endif;
endforeach;
?>