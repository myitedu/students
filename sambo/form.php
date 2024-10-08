<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<div class="jon">
    <div class="mydiv1 row">
        <div class="col">Sign Up</div>
        <div class="col">Login</div>
    </div>
    <h3>Sign Up For FREE</h3>
    <table id="mytable" class="table table-borderless">
        <tr>
            <td><input type="text" placeholder="First Name"></td>
            <td><input type="text" placeholder="Last Name"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="email" placeholder="Email Address"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="password" placeholder="Set a Password"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button class="btn">GET STARTED</button>
            </td>
        </tr>
    </table>
</div>


<style>
    button{
        width: 100%;
        background-color: green !important;
        padding: 10px;
    }
    input{
        width: 100%;
    }
    .table>:not(caption)>*>* {
        background: none !important;
    }
    td{
        text-align: center;
    }
    #mytable{
        width: 80%;
        margin: auto;
        background: none !important;
    }
    h3{
        text-align: center;
        color: white;
        padding-top: 30px;
    }
    .col{
        text-align: center;
        color:white;
        padding: 10px;
    }
    .mydiv1{
        width: 80%;
        margin: auto;
        padding: 3px;
        border: 1px solid black;
    }
    .jon{
        width: 810px;
        height: 490px;
        background-color: rgb(40 50 59);
        margin: 200px auto;
        padding-top: 30px;
    }

    body{
        background-color: black;
    }
</style>

</body>
</html>