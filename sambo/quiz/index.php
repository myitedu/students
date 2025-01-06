<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to my quizzes portal!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css/quiz.css">
    <script src="js/quiz.js"></script>
</head>
<body>

<?php
require "database.php";
$id=$_GET['id']??1;
$dir=$_GET['dir']??'next';
$id = (int) $id;

$obj = new database("myitedu");
$sql = "SELECT * FROM quizzes;";
$jon= $obj->sql($sql);
$max = count($jon);

$obj = new database("myitedu");
$sql = "SELECT * FROM quizzes WHERE id = $id;";
$quiz = $obj->sql($sql);
$quiz = $quiz[0];
if ($id>1){
    $prev_btn = $id-1;
}else{
    $prev_btn = 1;
}
if ($id<$max){
    $next_btn = $id+1;
}else{
    $next_btn = 1;
}

?>

<div id="quiz">
    <h4 class="question"><?=$quiz['id'];?>) <?=$quiz['question'];?></h4>
    <hr>
    <div class="row">
        <div class="col col-2 left_col">
            <a href="index.php?id=<?=$prev_btn;?>&dir=prev" class="btn btn-dark">Prev</a>
        </div>
        <div class="col col-8 middle_col">


            <table  class="table table-borderless answers">
                <tr>
                    <td><input id="inp_answer1" type="radio" name="answer" value="Los Angeles"><span class="letter">A</span> </td>
                    <td>Los Angeles</td>
                </tr>
                <tr>
                    <td><input id="inp_answer2" type="radio" name="answer" value="Washington, DC"><span class="letter">B</span> </td>
                    <td>Washington, DC</td>
                </tr>
                <tr>
                    <td><input id="inp_answer3" type="radio" name="answer" value="Chicago"><span class="letter">C</span></td>
                    <td>Chicago</td>
                </tr>
                <tr>
                    <td><input id="inp_answer4" type="radio" name="answer" value="New York"><span class="letter">D</span></td>
                    <td>New York</td>
                </tr>

            </table>
        </div>
        <div class="col col-2 right_col">
            <a href="index.php?id=<?=$next_btn;?>&dir=next"  class="btn btn-dark">Next</a>
        </div>
    </div>

    <p>Prev: <?=$next_btn;?></p>
</div>



</body>
</html>