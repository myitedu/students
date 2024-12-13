<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to December 12, 2024</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div id="school_application_form">
<h3 class="title">Private School Application Form</h3>
    <table style="background-color:red" class="table table-borderless">
        <tr>
            <td><label>Parent/guardian name:</label><br><input type="text" placeholder="First"></td>
            <td><br><input type="text" placeholder="Last"></td>
        </tr>
        <tr>
            <td colspan="2">
                <label>How old your child will be when they start out the school year:</label>
                <input type="text" placeholder="Last"></td>
        </tr>
        <tr>
            <td><label>Child name:</label><br><input type="text" placeholder="First"></td>
            <td><br><input type="text" placeholder="Last"></td>
        </tr>

        <tr>
            <td colspan="2"><label>The school he comes from:</label><input type="text" placeholder="Last"></td>
        </tr>
        <tr>
            <td colspan="2"><label>Home address:</label><input type="text" placeholder="Street Address"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" placeholder="Street Address 2"></td>
        </tr>

        <tr>
            <td><input type="text" placeholder="City"></td>
            <td><input type="text" placeholder="Region"></td>
        </tr>

        <tr>
            <td><input type="text" placeholder="Postal / Zip Code"></td>
            <td>
                <select name="country" id="country">
                    <option value="romania">Romania</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><label>Phone Number</label><input type="text" placeholder="XXX-XXX-XXXX"></td>
        </tr>

    </table>
</div>


<style>
    body{
        background-color: black;
    }
    #school_application_form{
        width: 800px;
        height: auto;
        border: 1px solid black;
        margin: 5px auto;
        background-color: #ede1c9;
    }
    .title{
        text-align: center;
        padding-top: 10px;
    }
    input, select{
        width: 100%;
        height: 45px;
        border-radius: 3px;
        border: 1px solid black;
    }
    .table, th, td{
        background: none !important;
    }
    td{
        padding-bottom: 20px !important;
    }
    .table{
        width: 90%;
        margin: auto;
    }
</style>
</body>
</html>