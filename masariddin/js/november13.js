$(function () {
    const makes = [];
    const models = [];
    const prices = [];
    const photos = [];
    let id = 0;
    let cars_table = "";
    function display_content(){
        let cars_table = "";
        for(let i=0; i<makes.length; i++){
            id++;
            make = makes[i];
            model = models[i];
            price = prices[i];
            photo = photos[i];
            delete_icon = "https://images.freeimages.com/fic/images/icons/99/office/256/delete.png";
            cars_table+=" <tr>\n" +
                "            <td>"+id+"</td>\n" +
                "            <td>"+make+"</td>\n" +
                "            <td>"+model+"</td>\n" +
                "            <td>$"+price+"</td>\n" +
                "            <td><img class=\"btn_delete_icon\" src=\""+delete_icon+"\" alt=\"delete\"><img class=\"photo\" src='"+photo+"'></td>\n" +
                "        </tr>";
        }
        $("#cars_table").html(cars_table);
    }
    $("#btn_insert").click(function () {
        let make = $("#make_input").val();
        let model = $("#model_input").val();
        let price = $("#price_input").val();
        let photo = $("#photo_input").val();
        makes.push(make);
        models.push(model);
        prices.push(price);
        photos.push(photo);
        console.log(make)
        display_content();
    });

    $(document).on("click", ".btn_delete_icon", function () {
       let ask = confirm("Are you sure you want to delete this car?");

       if (ask){
           $(this).closest("tr").remove();
       }else{
           alert("Ok, np");
       }
    });

});