const questions = [
    {
        question:"Which is largest animal in the world?",
        answers:[
            {text:"Shark", correctr: false},
            {text:"Blue Whale", correctr: true},
            {text:"Elephant", correctr: false},
            {text:"Giraffe", correctr: false},
        ]
    },
    {
        question:"Which is smallest continent in the world?",
        answers:[
            {text:"Asia", correctr: false},
            {text:"Africa", correctr: true},
            {text:"Artic", correctr: false},
            {text:"Australia", correctr: true},
        ]
    },
    {
        question:"Which is largest animal in the world?",
        answers:[
            {text:"Shark", correctr: false},
            {text:"Blue Whale", correctr: true},
            {text:"Elephant", correctr: false},
            {text:"Giraffe", correctr: false},
        ]
    },
    {
        question:"Which is smallest continent in the world?",
        answers:[
            {text:"Asia", correctr: false},
            {text:"Africa", correctr: true},
            {text:"Artic", correctr: false},
            {text:"Australia", correctr: true},
        ]
    },
    {
        question:"Which is largest animal in the world?",
        answers:[
            {text:"Shark", correctr: false},
            {text:"Blue Whale", correctr: true},
            {text:"Elephant", correctr: false},
            {text:"Giraffe", correctr: false},
        ]
    }
];

const questionElement = document.getElementById("question");
const answerButton = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz(){
    currentQuestionIndex =0 ;
    score = 0;
    nextButton.innerHTML = "Next";
    showQuestion();

}

function showQuestion(){
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;
    
    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButton.appendChild(button);

    });
}

startQuiz();
