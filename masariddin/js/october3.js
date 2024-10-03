$(function () {
    //Step 1: Click the button
    $("#btn_go").click(function () {
        //Step 2: Get the input value from the keyword input
        let keyword = $("#keyword").val();
        if (keyword==''){
            alert("Please enter your keyword");
            return false; //exiting the function
        }
        loadMyText(keyword);
    });


    function loadMyText(keyword){
        $.get("files/lorem.txt",{},function (content) {
            let total = content.search(keyword,content); //returns the total number
            if (total<0){ //it returns by default -1
                total = 0;
            }
            changeBackgroundColor(keyword);
            modify_total_found_box(keyword, content);
            let mytext = content.replaceAll(keyword, "<span class='found'>"+keyword+"</span>");
            $("#text").html(mytext);
        });
    }
    function modify_total_found_box(keyword, content){
        let total = content.search(keyword,content); //returns the total number
        $("#total_found").text(total);
        $("#keyword_found").text(keyword);
        $("#show_total_found").fadeIn("slow");
    }
    function changeBackgroundColor(keyword){
        if (keyword == 'Lorem'){
            $("body").css("background-color","brown");
        }else if (keyword == 'Ipsum'){
            $("body").css("background-color","purple");
        }else{
            $("body").css("background-color","whitesmoke");
        }
    }
    function sendEmail(){
        //Send the admin
    }
    function playMusic(){
        //do something and play music or whatever
    }

});