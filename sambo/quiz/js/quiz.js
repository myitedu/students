$(function () {

$("td").click(function () {

    if ($(this).prev("td").find("input[type='radio']").length) {
        // Select the radio button in the previous <td>
        $(this).prev("td").find("input[type='radio']").prop("checked", true);
        $("td").removeClass("select_td");
        $(this).closest("tr").find("td").addClass("select_td");
    }


});

});