$(function () {

    let mydate = new Date();
    let today_date = mydate.getMonth()+"/"+mydate.getDate() + "/" + mydate.getFullYear();
    let current_time = mydate.getHours()+":"+mydate.getMinutes();
    $(".date_left").text(today_date);
    $(".date_right").text(current_time);
});