<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
$qty = $_GET['qty']??1;
$even_numbers = [];
$odd_numbers = [];

for ($i=0; $i<$qty; $i++){
    if ($i%2===0){
        array_push($even_numbers,$i);
    }else{
        array_push($odd_numbers,$i);
    }
}
?>

<div class="container mt-5">

    <form>
        <p><label for="qty">Enter: </label>
            <input value="<?=$qty;?>" type="number" min="1" max="1000" name="qty">
            <button class="btn btn-danger">GO</button>
        </p>
    </form>

  <div id="display">

      <div class="row">
          <div class="col col-6">
              <?php foreach ($even_numbers as $even){
                  echo "<div class='box'>$even</div>";
              }
              ?>
          </div>
          <div class="col col-6">
              <?php foreach ($odd_numbers as $odd){
                  echo "<div class='box'>$odd</div>";
              }
              ?>
          </div>
      </div>

  </div>

</div>

<style>

    .col:first-child{
        background-color: yellow;
    }
    .col:last-child{
        background-color: #d2e1ea;
    }

    .box{
        width: 60px;
        height: 60px;
        text-align: center;
        line-height: 50px;
        font-weight: bolder;
        border-radius: 50%;
        margin: 5px;
        display: inline-block;
        background-color: yellow;
        border: 1px solid black;
    }
</style>
</body>
</html>
