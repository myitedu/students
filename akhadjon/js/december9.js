$(function () {

    const photos ={
        chicago:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWv7i3z151tz0nXTlRvN6QdeY5RQh6613bRA&s",
        london:'https://www.studying-in-uk.org/wp-content/uploads/2019/05/study-in-london.jpg',
        miami:'https://static1.squarespace.com/static/66311e7ab025c412c52014f4/t/66c3d1a01838d73e041f4f5e/1724109221770/Is+It+Better+To+Stay+In+Miami+Beach+Or+Downtown.jpg?format=1500w',
        orlando:'https://media.cntraveler.com/photos/5cb5f456c131b97740e95346/16:9/w_4000,h_2250,c_limit/GettyImages-948290544.jpg',
    };


    $("#btn_go").click(function () {
       let city = $("#city").val();
       let src = photos[city];
       $("#city_photo").attr("src", src);

    });


});