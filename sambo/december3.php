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
<div id="cities">

    <h2>Welcome to the world cities!</h2>

    <p>
        <img id="city_photo" src="https://www.frommers.com/system/media_items/attachments/000/872/410/s980/Miami_at_dawn_Florida.webp?1718632767" alt="miami">
    </p>


    <div id="buttons">
        <button data-city="0" class="btn_city">New York</button>
        <button data-city="1" class="btn_city">Paris</button>
        <button data-city="2" class="btn_city">London</button>
        <button data-city="3" class="btn_city">Dubai</button>
        <button data-city="4" class="btn_city">Madrid</button>
        <button data-city="5" class="btn_city">Other</button>
    </div>
</div>
<style>

    h2{
        color: gold;
    }

    #cities{
        text-align: center;
    }
    img{
        width: 500px;
        height: 350px;
        margin: 5px;
        border-radius: 13px;
        border: 5px solid #343434;
        box-shadow: 4px 4px 14px 4px black;
    }
.jon{
    background-color: darkred;
    color: gold;
}
body{
    background-color: #3b023b;
}
</style>
<script>
    $(function () {

        const photos = [
            'https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/New_york_times_square-terabass.jpg/1200px-New_york_times_square-terabass.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzO1LaopB--Ioe5ekaNXQsGfB2rYdPoVlFjw&s',
            'https://www.visitlondon.com/-/media/images/london/visit/things-to-do/sightseeing/london-attractions/big-ben/big-ben-houses-of-parliament-shutterstock640x360jpg.jpg?h=360&w=640&rev=e8ecaf8f5b5c46138df9bdd608b8d5da&hash=A8313B21036432D858B3C6A3C59359E2',
            'https://upload.wikimedia.org/wikipedia/commons/c/cc/Dubai_Skylines_at_night_%28Pexels_3787839%29.jpg',
            'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/34/00/95/community-of-madrid.jpg?w=1200&h=700&s=1',
            'https://www.eyeonasia.gov.sg/images/central-asia/Tashkent%20Tower%20in%20Central%20Asia.jpg',
        ];

        $("button").click(function () {
           let n = $(this).data('city');
           let photo_src = photos[n];
           $("#city_photo").attr('src', photo_src);
        });
    });


</script>
</body>
</html>