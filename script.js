var date= new Date();
var year= date.getFullYear();
var x = document.getElementById('reg_div2');
var y = document.getElementById('rdlo')
document.getElementById('cyear').innerHTML= year;


function home(){
    window.location.replace('./index.php');
}

function about(){
    window.location.replace('./about.php');
}

function service(){
    window.location.replace('./service.php');
}

function contact(){
    window.location.replace('./contact.php');
}

function account(){
    window.location.replace('./register.php')
}

function rdle(){
    window.location.replace('./login.php')
    // x.style.display = 'none';
}


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
