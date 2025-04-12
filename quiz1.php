
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    

    <title>Quiz By CoursPulse</title>
</head>
<body>
    <!-- <nav class="navbar">
        <a href="index.php"><img src="images/logo.png" alt=""></a>
        <ul class="navbar-ul1">
            <li onclick="home();">Home</li>
            <li onclick="about();">About</li>
            <li onclick="service();">Service</li>
            <li onclick="contact();">Contact</li>
            <li onclick="account();"><i class="fa-solid fa-user"></i></li>
            <li></li>
        </ul>
    </nav> -->
    
    <div class="quiz-container" id="quiz">
    <div class="quiz-header">
      <h2 id="question">Question Text</h2>
      <ul>
        <li>
          <input type="radio" name="answer" id="a" class="answer">
          <label for="a" id="a_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="b" class="answer">
          <label for="b" id="b_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="c" class="answer">
          <label for="c" id="c_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="d" class="answer">
          <label for="d" id="d_text">Answer</label>
        </li>
      </ul>
    </div>
    <button id="submit">Submit</button>
  </div>
    
    <!-- <footer class="footer1">
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
    </footer> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
        *{
        box-sizing: border-box;
        }
        body{
        background-color: #b8c6db;
        background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7f7 100%);
        font-family: 'Poppins', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        overflow: hidden;
        margin: 0;
        }
        .quiz-container{
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
        width: 600px;
        overflow: hidden;
        }
        .quiz-header{
        padding: 4rem;
        }
        h2{
        padding: 1rem;
        text-align: center;
        margin: 0;
        }
        ul{
        list-style-type: none;
        padding: 0;
        }
        ul li{
        font-size: 1.2rem;
        margin: 1rem 0;
        }
        ul li label{
        cursor: pointer;
        }
        button{
        background-color: #03cae4;
        color: #fff;
        border: none;
        display: block;
        width: 100%;
        cursor: pointer;
        font-size: 1.1rem;
        font-family: inherit;
        padding: 1.3rem;
        }
        button:hover{
        background-color: #04adc4;
        }
        button:focus{
        outline: none;
        background-color: #44b927;
        }
    </style>


    <script >
        const quizData = [
            {
                question: "What does HTML stand for?",
                a: "hypertext markup language",
                b: "hyperlink markup language",
                c: "hypertext preprocessor",
                d: "hypertext transfer protocol",
                correct: "a",
            },
            {
                question: "Which of the following are examples of block-level elements in HTML?",
                a: "<div>",
                b: "<p>",
                c: "<h1>",
                d: "all the above",
                correct: "d",
            },
            {
                question: "Which of the following tags is used to indicate the page’s start and endpoints?",
                a: "<body>",
                b: "<html>",
                c: "<head>",
                d: "<doctype>",
                correct: "c",
            },
            {
                question: "Which of the following tags doesn’t require a closing tag?",
                a: "<br>",
                b: "<hr>",
                c: "Both A and B",
                d: "none of the above",
                correct: "c",
            },
        ];
        const quiz= document.getElementById('quiz')
        const answerEls = document.querySelectorAll('.answer')
        const questionEl = document.getElementById('question')
        const a_text = document.getElementById('a_text')
        const b_text = document.getElementById('b_text')
        const c_text = document.getElementById('c_text')
        const d_text = document.getElementById('d_text')
        const submitBtn = document.getElementById('submit')
        let currentQuiz = 0
        let score = 0
        loadQuiz()
        function loadQuiz() {
            deselectAnswers()
            const currentQuizData = quizData[currentQuiz]
            questionEl.innerText = currentQuizData.question
            a_text.innerText = currentQuizData.a
            b_text.innerText = currentQuizData.b
            c_text.innerText = currentQuizData.c
            d_text.innerText = currentQuizData.d
        }
        function deselectAnswers() {
            answerEls.forEach(answerEl => answerEl.checked = false)
        }
        function getSelected() {
            let answer
            answerEls.forEach(answerEl => {
                if(answerEl.checked) {
                    answer = answerEl.id
                }
            })
            return answer
        }
        submitBtn.addEventListener('click', () => {
            const answer = getSelected()
            if(answer) {
            if(answer === quizData[currentQuiz].correct) {
                score++
            }
            currentQuiz++
            if(currentQuiz < quizData.length) {
                loadQuiz()
            } else {
                quiz.innerHTML = `
                <h2>You answered ${score}/${quizData.length} questions correctly</h2>
                <button onclick="location.reload()">Reload</button>
                `
            }
            }
        })
    </script>
</body>
</html>