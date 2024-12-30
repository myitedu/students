<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akhadjon's Lottery Game!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/lottery.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/lottery.js"></script>
</head>
<body>
<div id="lottery">
 <div class="row">
     <div class="col col-1 left_div">
         <span>nylottery.ny.gov</span>
         <span>nylottery.ny.gov</span>
         <span>nylottery.ny.gov</span>
         <span>nylottery.ny.gov</span>
     </div>
     <div class="col col-11 right_div">

         <div class="top_head">
             <p class="newyork">New York</p>
             <div class="letters">P</div>
             <div class="letters">O</div>
             <div class="letters">W</div>
             <div class="letters">E</div>
             <div class="letters">R</div>
             <div class="letters ball">ball</div>
             <div style="height: 50px"></div>
             <div class="powerplay">
                 <span>POWER</span>
                 <span>PLAY</span>
             </div>
             <div class="winning_numbers"></div>
             <div class="matching_numbers"></div>
             <div class="user_inputs">
                 <input value="1" min="0" max="99" type="number" id="number1" placeholder="0">
                 <input value="1" min="0" max="99" type="number" id="number2" placeholder="0">
                 <input value="0" min="0" max="99" type="number" id="number3" placeholder="0">
                 <input value="0" min="0" max="99" type="number" id="number4" placeholder="0">
                 <input value="0" min="0" max="99" type="number" id="number5" placeholder="0">
                 <input value="1" class="last_number" min="0" max="99" type="number" id="number6" placeholder="0">
                 <hr>
                 <div class="display_counter">0</div>
                 <hr>
                 <button id="btn_start_over" class="btn btn-dark">START OVER</button>
                 <button id="btn_roll" class="btn btn-danger">ROLL</button>
             </div>
         </div>

     </div>
 </div>
</div>
</body>
</html>