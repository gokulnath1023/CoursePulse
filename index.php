<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
        require("functions.php")

    ?>
    <?php
        $course_shuffle=$course->getData();
    ?>
    

    <title>CoursPulse</title>
</head>
<body>
    <nav class="navbar">
        <img src="images/logo.png" alt="">
        <ul class="navbar-ul1">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
            <li onclick="account();"><i class="fa-solid fa-user"></i></li>
        </ul>
    </nav>
    <div class="continer1">
        <h1 >CoursPulse</h1>
        <p>Learning is a treasure that will follow its owner everywhere</p>
        <button>Learn More</button>
    </div>
    <div class="row continer2">
        <div class="row">
            <center><h1 style="background-color: blueviolet;width: 100%;">Non Domail Courses</h1></center><br>
        </div>
        <?php foreach ($course_shuffle as $course){?>
            <div class="col">
                <a href="<?php printf('%s?course_id=%s','lesson.php',$course['course_id']); ?>"><img src="<?php echo $course['course_image'] ?>" alt=""></a>
                <h3><?php echo $course['course_name'] ?></h3>
            </div>
        <?php }?>


<!--        <div class="col">-->
<!---->
<!--            <img src="images/css.jpg" alt="">-->
<!--            <h3>CSS</h3>-->
<!--            <button>Learn More</button>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <img src="images/bootstrap.jpg" alt="">-->
<!--            <h3>BootStrap</h3>-->
<!--            <button>Learn More</button>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <img src="images/javascript.png" alt="">-->
<!--            <h3>JavaScript</h3>-->
<!--            <button>Learn More</button>-->
<!--        </div>-->
        
    </div>
    <div class="row continer2">
        <div class="row">
            <center><h1>Domail Based Courses</h1></center><br>
        </div>
        <div class="col">
            <img src="images/Android-Development.png" alt="">
            <h3>Android Development</h3>
            <button>Learn More</button>
        </div>
        <div class="col">
            <img src="images/game-development.jpg" alt="">
            <h3>Game Development</h3>
            <button>Learn More</button>
        </div>
        <div class="col">
            <img src="images/frontend.jpg" alt="">
            <h3>Front-End Development</h3>
            <button>Learn More</button>
        </div>
        <div class="col">
            <img src="images/backend.jpg" alt="">
            <h3>Back-End Development</h3>
            <button>Learn More</button>
        </div>
        
    </div>
    <div class="row continer3">
        <div class="col continer31">
            <h2>Need Any Courses</h2>
            <h1>30% Off For New Students</h1>
            <h4>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</h4>
        </div>
        <div class="col continer32 admission_form">
            <form action="">
            <div>

                <input type="text" placeholder="Name:">
            </div>
            <div>

                <input type="email" placeholder="Email:">
            </div>
            <div>

                <textarea name="" id="" placeholder="Message:"></textarea>
            </div>
            <div>
            <select>
                <option selected>Select a course</option>
                <option value="1">Course 1</option>
                <option value="2">Course 1</option>
                <option value="3">Course 1</option>
            </select><br>
            <input type="submit">
            </div>
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
        <a href="courspulse.xml">VIEW AN XML DOCUMENT</a>
    </footer>
    <script src="script.js">

    </script>
    
</body>
</html>