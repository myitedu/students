<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/november2.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/november2.js"></script>
</head>
<body>

<div id="login_form">
    <h3 class="form_title">Login</h3>
    <div style="height: 60px"></div>
    <div class="div1">
        <input id="email" class="myinputs" type="email" placeholder="Email">
    </div>
    <div style="height: 42px"></div>
    <div class="div2">
        <input id="password" class="myinputs" type="password" placeholder="Password">
    </div>
    <div style="height: 15px"></div>
    <div class="div2a">
        <div class="row">
            <div class="col col-6 div2_left">
                <input type="checkbox"> Remember Me
            </div>
            <div class="col col-6 div2_right">
                <a href="#">Forgot Password</a>
            </div>
        </div>
    </div>

    <div style="height: 60px"></div>
    <div class="div3">
       <button id="mybtn" class="mybtn">LOGIN</button>
    </div>

</div>

</body>
</html>