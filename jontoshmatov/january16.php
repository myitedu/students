<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do-List Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<div id="to_do_list">
    <div class="row">
        <div class="col col-3 left_panel">
            <h6>To Do Items</h6>
            <hr>
            <ul id="ul_items"></ul>
            <i id="btn_new" class="material-icons">add_circle</i>
        </div>
        <div class="col col-9 right_panel">
            <h6 id="note_title">Car Maintenance</h6>
            <hr>
            <div id="note_text">Notes:</div>

            <div id="form_new">dcsdcsdc</div>

        </div>
    </div>
</div>

<style>
    #ul_items{
        height: 370px;
        overflow: auto;
        padding: 2px;
    }
    #note_text {
        min-height: 200px;
        max-height: 85%;
        overflow: auto;
        padding: 3px;
        border-radius: 5px;
    }

    #form_new tr:first-child td {
        text-align: center;
        font-size: 20px;
        font-weight: bolder;
        text-transform: uppercase;
    }

    #form_new tr:last-child td {
        text-align: center;
    }

    #form_new td:first-child {
        text-align: right;
        padding-right: 5px;
        font-weight: bolder;
    }

    #form_new input, textarea {
        width: 100%;
    }

    #form_new {
        width: 350px;
        margin: auto;
        border-radius: 5px;
        border: 1px solid #94988e;
        position: fixed;
        top: 30%;
        background-color: #d3d4ca;
        padding: 5px;
        display: none;
    }

    .table > :not(caption) > * > * {
        background: none;
    }


    body {
        background-color: #f8d5da;
    }

    #btn_new:hover {
        color: darkred;
    }

    #btn_new {
        position: relative;
        bottom: 0%;
        right: -49%;
        cursor: pointer;
    }

    .col {
        height: 500px;
    }

    .left_panel ul li:hover {
        cursor: pointer;
        background-color: rgba(255, 255, 0, 0.26);
        color: darkred;
    }

    .left_panel ul li {
        box-shadow: 4px 4px 24px 4px rgba(0, 0, 0, 0.24);
        border-radius: 10px;
        padding: 5px;
        margin-bottom: 5px;
    }

    #to_do_list {
        width: 80%;
        margin: 50px auto;
        box-shadow: 4px 4px 24px 4px black;
        border-radius: 10px;
        padding: 5px;
        background-color: white;
    }

    .left_panel ul {
        text-align: left;
        list-style: none;
    }

    .left_panel {
        text-align: center;
    }

    .right_panel {
        border-left: 1px solid black;
    }
</style>
<script>
    $(function () {
        readItems();
        readLinks();
        function readItems(num = 0) {
            $.get("notes.json", function (response) {
                try {
                    const notes = JSON.parse(response);

                    // Reverse the array before accessing elements
                    const reversedNotes = notes.reverse();
                    console.log(reversedNotes);

                    $("#note_title").html(reversedNotes[num].title);
                    $("#note_text").html(reversedNotes[num].content);

                } catch (error) {
                    console.error("Error parsing JSON:", error);
                }
            });
        }
        var items = "";
        function readLinks() {
            $.get("notes.json", function (response) {
                try {
                    const notes = JSON.parse(response);

                    if (Array.isArray(notes)) {
                        // Reverse the array to display items in reverse order
                        const reversedNotes = notes.reverse();

                        let items = "";
                        let id = 0;
                        reversedNotes.forEach(note => {
                            items += "<li data-num='" + id + "' class='li_items'>" + note.title + "</li>";
                            id++;
                        });

                        $("#ul_items").html(items);
                    } else {
                        console.error("notes is not an array:", notes);
                    }

                } catch (error) {
                    console.error("Error parsing JSON:", error);
                }
            });
        }
        $(document).on("click", ".li_items", function () {
            let num = $(this).data("num");
            readItems(num);
        });
        $("#btn_new").click(function () {
            $.get("create_new_form.php", {}, function (response) {
                $("#form_new").html(response);
                $("#form_new").toggle();
            });

        });

        $(document).on("click", "#btn_create", function () {
            let title = $("#title").val();
            let note = $("#note").val();

            $.ajax({
                type: "POST",
                url: "save_note.php",
                data: { title: title, content: note },
                success: function(response) {
                    // Handle success response (e.g., display a success message)
                    console.log(response);
                    // Clear input fields and update UI (if necessary)
                },
                error: function(xhr, status, error) {
                    // Handle errors (e.g., display an error message to the user)
                    console.error("Error saving note:", error);
                }
            });

            document.location = "january16.php";

        });
    });
</script>
</body>
</html>