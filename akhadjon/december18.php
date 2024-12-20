<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Move element left to right and top to bottom</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container">
    <h4 style="text-align: center">Welcome to My Ps!</h4>
    <div style="text-align: center">
        <label for="qty">Enter: </label>
        <input value="2" id="get_number" type="number" min="1" max="1000">
        <button id="btn_go" class="btn btn-info">GO</button>
        <button id="btn_new" class="btn btn-success">New</button>
        <button id="btn_delete" class="btn btn-danger">Delete Last</button>
    </div>
    <div id="mybox"></div>
</div>
<style>
    p{
        background-color: black;
        color: gold;
        padding: 5px;
        cursor: pointer;
    }
</style>
<script>

    $(function () {

        let max_number = 2;

        $("#btn_go").click(function () {
            max_number = $("#get_number").val();
            generatePs();
        });

        $("#btn_delete").click(function () {
            $("p:last-child").remove();
        });

        $("#btn_new").click(function () {
            let lastP = $("p:last").text(); // Get the text of the last <p>
            let lastNumber = parseInt(lastP.replace("Box #", "")) || 0; // Extract and parse the number
            let newNumber = lastNumber + 1; // Increment the number
            let new_p = "<p>Box #" + newNumber + "</p>";
            $("#mybox").append(new_p); // Append the new <p>
        });

        $(document).on("click","p",function () {
          $(this).remove();
        });


        function generatePs(){
            let p = "";
            for(let i = 1; i<=max_number; i++){
                p+="<p>Box #"+i+"</p>";
            }
            $("#mybox").html(p);
        }

        generatePs();

    });

</script>
</body>
</html>