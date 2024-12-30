<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>December 28, 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div id="mybox">
    <h3 class="mytitle">The seasons changer tool</h3>
    <hr>
    <p id="season_name">WINTER</p>
    <div id="myform">
        <label for="month">Select: </label>
        <select name="month" id="month">
            <option value="">Months</option>
            <option value="january">January</option>
            <option value="februry">Februry</option>
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
        <button id="btn_go" class="btn btn-danger">GO</button>
    </div>
    <img id="season_toy" src="https://static.vecteezy.com/system/resources/previews/024/866/013/non_2x/snowman-with-ai-generated-free-png.png" alt="season_toy">
</div>


<style>

    #season_toy{
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 120px;
        height: 170px;
    }

    body{
        background-size: cover;
        background-image: url("https://wallpapers.com/images/featured/winter-cmgw5mq23dasvttz.jpg");
    }
    #season_name{
        text-align: center;
        font-size: 16px;
        color: darkblue;
    }
    label{
        font-weight: bolder;
        color: white;
    }
    select{
        height: 40px;
        width: 200px;
    }
    .mytitle{
        color: #0e5d84;
        text-align: center;
        text-shadow: 4px 4px 6px ghostwhite;
        text-transform: uppercase;
        padding-top: 10px;
    }
    #myform{
        background-color: #d2e1ea;
        width: 100%;
        height: auto;
        padding: 5px;
        text-align: center;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        background-image: url("https://t4.ftcdn.net/jpg/01/70/93/27/360_F_170932733_VOHGeaH5AjrVCXBVryEwVgwhArv2wNNH.jpg");
    }
    #mybox{
        width: 800px;
        height: 650px;
        border: 1px solid black;
        margin: 50px auto;
        background-color: rgba(109, 166, 195, 0.34);
        box-shadow: 4px 4px 24px 4px black;
        border-radius: 12px;
    }
</style>

<script>
    $(function () {

        var season_name = 'winter';
        var season_background = {
            'winter':'https://wallpapers.com/images/featured/winter-cmgw5mq23dasvttz.jpg',
            'spring':'https://static.vecteezy.com/system/resources/previews/047/535/885/non_2x/spring-season-nature-wallpaper-photo.jpg',
            'summer':'https://www.wallpapergap.com/cdn/24/212/summer-scenes-wallpaper-1920x1080.jpg',
            'fall':'https://wallpapercat.com/w/full/d/7/c/18694-1920x1080-desktop-full-hd-autumn-wallpaper-image.jpg'
        };

        //Step 1
        $("#btn_go").click(function () {
           //Step 2
           let month = $("#month").val();
           //Step 3
            if (month=='december' || month=='january' || month=='february'){
                season_name =  'winter';
            }else if (month=='march' || month=='april' || month=='may'){
                season_name =  'spring';
            }else if (month=='june' || month=='july' || month=='august'){
                season_name =  'summer';
            }else if (month=='september' || month=='october' || month=='november'){
                season_name =  'fall';
            }else{
                season_name = 'winter';
            }

            $("#season_name").text(season_name.toUpperCase());

            let bg = season_background[season_name];
            $("body").css("background-image","url("+bg+")")
        });


    });
</script>

</body>
</html>