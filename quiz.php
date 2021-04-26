<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$questions = array("Question 1: What is 10 in binary?", "Question 2: What is 2+2-1+2-5+0+100 ?", "Question 3: What is my favorite Pokemon?", "Question 4: Who won the last World Title in Rocket League?", "Question 5: Which automaton accepts the most languages?");
$responses = array($_POST["Q1"], $_POST["Q2"], $_POST["Q3"], $_POST["Q4"], $_POST["Q5"]) ;
$answers = array("1010", "100", "Lucario", "NRG", "Turing Machine");

function results()
{
    $correct = 0;
    $total = 50;
    $points = 0;

    for ($i = 0; $i < 5; $i++)
    {
        echo "<div>{$GLOBALS["questions"][$i]}</div>";
        echo "<div>&emsp;You answered: {$GLOBALS["responses"][$i]}</div>";
        echo "<div>&emsp;Correct answer: {$GLOBALS["answers"][$i]}</div>";

        if ($GLOBALS["responses"][$i] == $GLOBALS["answers"][$i]) {
            $points += 10;
            $correct++;
        }
    }
    echo "<div>Total correct: {$correct}</div>";
    echo "<div>Score: " . ($points/$total*100) . "%</div>";
}
results();
?>