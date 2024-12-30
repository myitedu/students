$(function () {
    generate_winning_numbers();

    var counter = 0;
    function generate_winning_numbers() {
        counter++;
        let numbers = [
            Math.floor(Math.random() * 100),
            Math.floor(Math.random() * 100),
            Math.floor(Math.random() * 100),
            Math.floor(Math.random() * 100),
            Math.floor(Math.random() * 100),
            Math.floor(Math.random() * 100),
        ];
        let winning_numbers = ''
        let matching_numbers = [];
        for (let i = 0; i < 6; i++) {
            let n = numbers[i];
            let id = i;
            id++;
            let un = $("#number" + id).val();
            winning_numbers += "<div>" + n + "</div>"
            if (n == un) {
                matching_numbers.push(i);
            }
        }
        $(".winning_numbers").html(winning_numbers);
        matching_numbers.forEach(function (n) {
            $("input").eq(n).css("background-color", "red");
        })
        $(".display_counter").html(counter);
    }

    $("#btn_roll").click(function () {

        let matching_numbers = [0,1,2,3,4,5];
        matching_numbers.forEach(function (n) {
            $("input").eq(n).css("background-color", "white");
        })

        generate_winning_numbers();

    });

    $(".display_counter").html(0);

    $("#btn_start_over").click(function () {
        document.location = "index.php";
    });
});
