<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivia Quiz</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="container">
        <h1>🧠 Trivia Quiz</h1>

        <!-- Start Screen -->
        <div id="start-screen">
            <p>10 questions • 4 options each • One question at a time</p>
            <button onclick="startQuiz()">Start Quiz</button>
        </div>

        <!-- Quiz Screen -->
        <div id="quiz-screen" class="hidden">
            <div id="progress">Question <span id="current">1</span> of <span id="total">10</span></div>
            <div id="question"></div>
            <div id="options"></div>
            <button id="next-btn" onclick="nextQuestion()">Next Question →</button>
        </div>

        <!-- Result Screen -->
        <div id="result-screen" class="hidden">
            <h2>Your Score: <span id="score">0</span>/10</h2>
            <p id="percentage"></p>
            <button onclick="restartQuiz()">Play Again</button>
        </div>
    </div>

    <script src="../script/script.js"></script>
</body>
</html>