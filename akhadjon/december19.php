<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasons of the year</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container">
    <h3>The seasons of the year</h3>
    <hr>
    <p>
        <select name="month" id="month">
            <option value="">Select Month</option>
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">October</option>
            <option value="november">November</option>
            <option value="december">December</option>
        </select>

        <button class="btn btn-danger" id="btn_go">GO</button>

    </p>
    <hr>
    <p>The selected season: <span id="selected_season">Winter</span></p>


</div>


<script>
    $(function () {
        let seasons = {
            winter:"https://www.usatoday.com/gcdn/authoring/authoring-images/2024/10/17/USAT/75714706007-usatsi-24195665.jpg?crop=3475,1955,x0,y169",
            spring:"https://images.contentstack.io/v3/assets/bltcedd8dbd5891265b/blt98532c54a724484a/6668d40fbf9bc579aa72e698/4603922-May-flowers.jpg?q=70&width=3840&auto=webp",
            summer:"https://images.pexels.com/photos/1450353/pexels-photo-1450353.jpeg?cs=srgb&dl=pexels-asadphoto-1450353.jpg&fm=jpg",
            fall:"https://www.rockbrookcamera.com/cdn/shop/articles/fall-photography-heor.jpg?v=1728413508"
        }

        let current_season = "winter";

        $("#btn_go").click(function () {

           let month = $("#month").val();
           let bg = "";

           if (month=='december' || month=='january' || month=='february'){
               current_season = "winter";
           }else if (month=='march' || month=='april' || month=='may'){
               current_season = "spring";
           }else if (month=='june' || month=='july' || month=='august') {
               current_season = "summer";
           }else if (month=='september' || month=='october' || month=='november') {
               current_season = "fall";
           }


           bg = seasons[current_season];
           $("#selected_season").text(current_season);
           $("body").css("background-image","url("+bg+")");

           });



    });
</script>

<style>
    body{
        background-size: cover;
    }
</style>

</body>
</html>
