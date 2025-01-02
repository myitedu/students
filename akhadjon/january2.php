<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<div id="business_card">
    <div class="row">
        <div class="col col-4 leftcol">
            <h4>Inputs</h4>
            <input placeholder="Company Name" type="text" id="company_name">
            <input placeholder="Full Name"  type="text" id="full_name">
            <input placeholder="Title"  type="text" id="title">
            <input placeholder="Website"  type="text" id="website">
            <input placeholder="Phone"  type="text" id="phone">
        </div>
        <div class="col col-8 rightcol">
            <div id="business_card_small">

                <table class="table table-borderless">
                    <tr>
                        <td><img id="logo" src="https://bcassetcdn.com/public/blog/wp-content/uploads/2021/11/30150053/Tide_Logo-1024x1024.png" alt="logo"></td>
                        <td id="company_name2">Company Name</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td id="full_name2">Jon Toshmatov</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td id="title2">CEO</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td id="website2">Website</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td id="phone2">Phone</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>

<style>
    td:last-child{
        text-align: left;
    }
    #company_name{
        text-align: left;
        font-weight: bolder;
    }
    td{
        text-align: center;
    }
    #logo{
        width: 100px;
    }
    input{
        margin-bottom: 20px;
    }
    body{
        background-color: black;
    }
    #business_card_small{
        margin: 160px auto;
        width: 80%;
        height: 50%;
        border: 1px solid black;
    }
    .col{
        height: 650px;
    }
    .row{
        padding: 0;
        margin: 0;
    }
    .leftcol{
        border-right: 1px solid black;
        text-align: center;
    }
    .rightcol{
    }
    #business_card{
        width: 800px;
        height: 650px;
        margin: 50px auto;
        border: 1px solid black;
        background-color: white;
    }
</style>

<script>
    $(function () {
        //Company Name
       $("#company_name").keyup(function () {
          let val = $(this).val();
          $("#company_name2").html(val);
       });
       //Full Name
        $("#full_name").keyup(function () {
            let val = $(this).val();
            $("#full_name2").html(val);
        });
    });
</script>

</body>
</html>
