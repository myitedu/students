$( function() {
    $( ".draggable" ).draggable();

    let points = 0, attempts = 0;

// Make elements with the class "draggable" draggable
    $( ".draggable" ).draggable({
        revert: "invalid"  // This makes the item revert back if not dropped in the right place
    });

// Make elements with the class "droppable" droppable
    $( ".droppable" ).droppable({
        drop: function( event, ui ) {
            attempts++;

            // Access the dragged element
            var droppedElement = ui.draggable;
            var city = droppedElement.data("city");

            // Access the droppable element's city data attribute
            var droppable_city = $(this).data("city");

            // Check if the answer is correct
            if (droppable_city === city) {
                points++;
                $(this).closest('td').find(".check_mark").show();
                $(this).closest('td').find(".cross_mark").hide();
                // Disable the droppable after a correct drop to prevent further interaction
                $(this).droppable("disable");
            } else {
                $(this).closest('td').find(".check_mark").hide();
                $(this).closest('td').find(".cross_mark").show();
            }

            //$(this).text('');
            // Show the score after 3 attempts
            if (attempts >= 3) {
                alert("Your score: " + points);
            }
        }
    });

} );