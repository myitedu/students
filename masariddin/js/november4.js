$(function () {

    let mydate = new Date();
    let today_date = mydate.getMonth()+"/"+mydate.getDate() + "/" + mydate.getFullYear();
    let current_time = mydate.getHours()+":"+mydate.getMinutes();
    $(".date_left").text(today_date);
    $(".date_right").text(current_time);
    const items = [];
    const prices = [];
    const qty = [];
    function calculate_items(i, p, q){
        if (typeof i!='undefined' && typeof p!='undefined' && typeof q!='undefined') {
            items.push(i);
            prices.push(p);
            qty.push(q);
            console.log("ALL IS GOOD");
        }
        let subtotal = 0;
        let grand_total = 0;
        let subtotal2 = 0;
        let id = 0;
        var taxes = 0;
        let total_items = "";
        for(let i = 0; i<items.length; i++){
            id++;
            subtotal2=(prices[i] * qty[i]);
            subtotal2 = subtotal2.toFixed(2);
            total_items+=" <tr>\n" +
                "                <td>"+id+"</td>\n" +
                "                <td>"+items[i]+"</td>\n" +
                "                <td>"+qty[i]+" x "+prices[i]+" = $"+subtotal2+"</td>\n" +
                "            </tr>";

            subtotal+=eval(qty[i]+"*"+prices[i]);
            console.log(subtotal);

        }
        subtotal = subtotal.toFixed(2);
        taxes= eval((subtotal+"*"+0.07));
        grand_total= eval(subtotal +"+"+ (subtotal+"*"+0.07));
        $("#items_table").html(total_items);
        $("#display_subtotal").html(subtotal);
        $("#display_subtotal").html(subtotal);
        $("#display_taxes").html(taxes.toFixed(2));
        $("#display_grandtotal").html(grand_total.toFixed(2));
        $("#you_pay").html("$"+grand_total.toFixed(2));
    }
    calculate_items();

    $("#btn_add_new_item").click(function () {
       let i = $("#item_name").val();
       let p = $("#item_price").val();
       let q = $("#item_qty").val();
        items.push(i);
        prices.push(p);
        qty.push(q);
        calculate_items();
    });





});