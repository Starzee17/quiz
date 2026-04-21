let questions = [];
let currentIndex = 0;
let userAnswers = [];
let selected = null;

async function startQuiz() {
    document.getElementById('start-screen').classList.add('hidden');
    document.getElementById('quiz-screen').classList.remove('hidden');
    
    const res = await fetch('../get_questions/get_questions.php');
    questions = await res.json();
    
    document.getElementById('total').textContent = questions.length;
    currentIndex = 0;
    userAnswers = [];
    loadQuestion();
}

function loadQuestion() {
    const q = questions[currentIndex];
    document.getElementById('current').textContent = currentIndex + 1;
    document.getElementById('question').innerHTML = `<strong>Q${currentIndex+1}.</strong> ${q.question}`;
    
    const opts = document.getElementById('options');
    opts.innerHTML = '';
    
    Object.keys(q.options).forEach(key => {
        const div = document.createElement('div');
        div.className = 'option';
        div.innerHTML = `${key}) ${q.options[key]}`;
        div.onclick = () => {
            document.querySelectorAll('.option').forEach(o => o.classList.remove('selected'));
            div.classList.add('selected');
            selected = key;
            document.getElementById('next-btn').style.display = 'block';
        };
        opts.appendChild(div);
    });
    
    selected = null;
    document.getElementById('next-btn').style.display = 'none';
}

function nextQuestion() {
    if (!selected) {
        alert("Please select an answer!");
        return;
    }
    
    userAnswers[currentIndex] = selected;
    
    currentIndex++;
    if (currentIndex < questions.length) {
        loadQuestion();
    } else {
        showResults();
    }
}

function showResults() {
    document.getElementById('quiz-screen').classList.add('hidden');
    document.getElementById('result-screen').classList.remove('hidden');
    
    let score = 0;
    for (let i = 0; i < questions.length; i++) {
        if (userAnswers[i] === questions[i].correct) score++;
    }
    
    const percent = Math.round((score / questions.length) * 100);
    document.getElementById('score').textContent = score;
    document.getElementById('percentage').innerHTML = `You got <strong>${percent}%</strong> correct!`;
}

function restartQuiz() {
    document.getElementById('result-screen').classList.add('hidden');
    document.getElementById('start-screen').classList.remove('hidden');
}