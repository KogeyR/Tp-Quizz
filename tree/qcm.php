<?php
include '../config/pdo-connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="../style/main.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <h1> Bienvenue </h1>
    <p> Pour revenir à l'accueil <a href="../index.php">Cliquer ici</a></p>
    <p> Choisissez la ou les réponses justes</p>
    <form method="post" action="result.php" id="quizForm">
        <p class="question" id="question1"> Question 1 : QCM 1...</p>
        <p class="choices" id="question1-choices"> 
            <label for="1">Réponse 1</label> <input type="radio" name="Re" value="1" id="1"><br>
            <label for="2">Réponse 2</label> <input type="radio" name="Re" value="2" id="2"><br>
            <label for="3">Réponse 3</label> <input type="radio" name="Re" value="3" id="3"><br>
        </p>

        <p class="question hidden" id="question2"> Question 2 : QCM 2...</p>
        <p class="choices hidden" id="question2-choices"> 
            <label for="4">Réponse 1</label> <input type="radio" name="R2" value="1" id="4"><br>
            <label for="5">Réponse 2</label> <input type="radio" name="R2" value="2" id="5"><br>
            <label for="6">Réponse 3</label> <input type="radio" name="R2" value="3" id="6"><br>
        </p>

        <p class="question hidden" id="question3"> Question 3 : QCM 3...</p>
        <p class="choices hidden" id="question3-choices"> 
            <label for="7">Réponse 1</label> <input type="radio" name="R3" value="1" id="7"><br>
            <label for="8">Réponse 2</label> <input type="radio" name="R3" value="2" id="8"><br>
            <label for="9">Réponse 3</label> <input type="radio" name="R3" value="3" id="9"><br>
        </p>

        <input type="button" id="nextButton" value="Suivant" class="hidden">
        <input type="submit" name="correc" value="Voir résultat" class="hidden">
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var questions = document.querySelectorAll(".question");
            var choices = document.querySelectorAll(".choices");
            var currentQuestionIndex = 0;
            var nextButton = document.getElementById("nextButton");

            function showCurrentQuestion() {
                questions[currentQuestionIndex].classList.remove("hidden");
                choices[currentQuestionIndex].classList.remove("hidden");
            }

            function hideCurrentQuestion() {
                questions[currentQuestionIndex].classList.add("hidden");
                choices[currentQuestionIndex].classList.add("hidden");
            }

            function enableNextButton() {
                nextButton.classList.remove("hidden");
            }

            function disableNextButton() {
                nextButton.classList.add("hidden");
            }

            function moveToNextQuestion() {
                hideCurrentQuestion();
                currentQuestionIndex++;

                if (currentQuestionIndex < questions.length) {
                    showCurrentQuestion();
                    disableNextButton();
                } else {
                    document.querySelector("input[type='submit']").classList.remove("hidden");
                }
            }

            showCurrentQuestion();

            var inputs = document.querySelectorAll("input[type='radio'], input[type='checkbox']");
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener("change", function() {
                    enableNextButton();
                });
            }

            nextButton.addEventListener("click", function() {
                moveToNextQuestion();
            });
        });
    </script>
</body> 
</html>