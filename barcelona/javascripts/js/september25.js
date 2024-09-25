/*
$(function () {
    $("#btn_go").click(function () {
        let keyword = $("#keyword").val();

        if (keyword.length == 0) {
            $("#keyword").css("background-color", "red");
            return false;
        } else {
            $("#keyword").css("background-color", "white");
        }
         fetchText(keyword);
    });
    function fetchText(keyword) {
        $.get("files/lorem.txt", function (lorem) {
            let result = lorem.replace(new RegExp(keyword, "gi"), "<span class='found'>" + keyword + "</span>");
            $("#lorem").html(result);
        });
    }
});
*/

let regex = /(\([0-9]{3}\)) ([0-9]{3})-([0-9]{4})/i;
let result = regex.test("(347) 576-4953");
console.log(result); // true