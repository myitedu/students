$(function () {

    let photos = [
        'https://www.automoli.com/common/vehicles/_assets/img/gallery/f92/bmw-m6-coupe-f13m.jpg',
        'https://imgd.aeplcdn.com/1920x1080/cw/ec/28449/BMW-M6-Right-Front-Three-Quarter-94306.jpg?v=201711021421&q=80&q=80',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj-ZkCElxDmqwBxaTLgGr6rvyhq2eb-I8wyw&s',
        'https://www.bmwwarrantydirect.com/cdn/shop/products/bmw-M6-gran_coupe-white_530x@2x.png?v=1571835274',
        'https://bringatrailer.com/wp-content/uploads/2024/06/2007_bmw_m6-convertible_p1014555-62261.jpg?fit=940%2C626',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzrATajGTeagpe4WD62-uq6Hq4I0u4kw7tcQ&s',
        'https://s1.cdn.autoevolution.com/images/news/new-bmw-m6-rendered-as-the-grand-tourer-bmw-won-t-build-129598-7.jpg',
        'https://www.netcarshow.com/BMW-M6_Coupe-2013-Front_Three-Quarter.11839b92.jpg',
        'https://s1.cdn.autoevolution.com/images/news/new-bmw-m6-rendered-as-the-grand-tourer-bmw-won-t-build-129598-7.jpg',
        'https://mediapool.bmwgroup.com/cache/P9/201212/P90108975/P90108975-bmw-m6-gran-coupe-exterior-12-2012-600px.jpg'
    ];

    function display_photos(qty=10){
        let imgs = "";

        for(let i = 0; i<qty; i++){
            imgs+="<img class='photo' src='"+photos[i]+"'>"
        }
        $("#photo_gallery").html(imgs);
    }

    display_photos();


    $(".photo").click(function () {
       let url = $(this).attr('src');
       document.location = url;
    });

});


