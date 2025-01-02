<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div id="mytext">
    <h3>Welcome to Numbersville, USA!!!</h3>
    <hr>
    <p>
        <label for="qty">Enter: </label>
        <input value="1" type="number" min="1" max="10000" id="qty">
        <button id="btn_go">GO</button>
    </p>
    <hr>

    <div id="display"></div>

</div>

<style>

    .ocean{
        background-image: url("https://plus.unsplash.com/premium_photo-1673306778968-5aab577a7365?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YmFja2dyb3VuZCUyMGltYWdlfGVufDB8fDB8fHww");
        background-size: cover;
    }

    #mytext{
        text-align: center;
    }
    .box{
        width: 120px;
        height: 120px;
        border: 1px solid black;
        border-radius: 50%;
        display: inline-block;
        margin: 5px;
        text-align: center;
        line-height: 120px;
    }
    .even{
        background-color: greenyellow;
    }
    .odd{
        background-color: hotpink;
    }
</style>

<script>
    $(function () {

        $("#btn_go").click(function () {
            let qty = $("#qty").val();
            let myhtml = "";
            let cl = "";

            for(let i=1; i<=qty; i++){
                if (i%2===0){
                    cl = 'even';
                }else{
                    cl = 'odd';
                }

                if (i%14===0){
                    cl = "ocean";
                }

                if (i%2!==0) {
                    myhtml += "<div class=\"box " + cl + "\">" + i + "</div>";
                }
            }
            $("#display").html(myhtml);

        });


    });
</script>

</body>
</html>
