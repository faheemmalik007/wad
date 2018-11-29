var questions = [{
    question : "When a user views a page containing a JavaScript program, which machine actually executes the script?",
    choices : [ "The User's machine running a Web browser",
        "The Web server",
        "A central machine deep within Netscape's corporate offices",
        "None of the above"],
    correctAnswer : 0
},{
    question : "Which of the following can't be done with client-side JavaScript?",
    choices : [ "Validating a form",
        "Sending a form's contents by email",
        "Storing the form's contents to a database file on the server",
        "None of the above"],
    correctAnswer : 2
},{
    question : "Using _______ statement is how you test for a specific condition",
    choices : [ "select",
        "if",
        "for",
        "none of the above"],
    correctAnswer : 1
}];

var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;
displayCurrentQuestion();
document.getElementById("quiz-message").style.display = 'none';
function displayNext() {
    if(currentQuestion<2)
    {
        var inn=document.querySelector("input[type=radio]:checked");
        if(inn==null)
        {
            var quiz=document.getElementById("quiz-message");
            quiz.style.display="inline";
            quiz.innerText='please select an answer';
            var choice=document.getElementById("choice-list");
            choice.innerHTML='';
        }
        else {
            if(inn.id===questions[currentQuestion].correctAnswer)
            {
                correctAnswers++;
            }
            var ChoiceList=document.getElementById("choice-list");
            ChoiceList.innerHTML='';
            currentQuestion++;
        }
        displayCurrentQuestion();
    }
    else {
        displayScore();
    }
    }

function displayCurrentQuestion() {
    var idd=document.getElementById("question");
    idd.innerHTML='<p>'+questions[currentQuestion].question+'<p>';
    var ChoiceList1=document.getElementById("choice-list");
    for(var x=0;x<questions[currentQuestion].choices.length;x++)
    {
        ChoiceList1.innerHTML += '<li>'+'<input id=x type="radio" name="ch">'+ questions[currentQuestion].choices[x] +'</li>';
    }
}

function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}
function displayScore() {
    document.getElementById("result").innerHTML = "you scored: " + correctAnswers + " out of: " + questions.length;
    document.getElementById("result").style.display = 'block';
}
function hideScore() {
    document.getElementById("result").style.display = 'none';
}