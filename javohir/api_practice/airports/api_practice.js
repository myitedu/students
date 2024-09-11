$(document).ready(function() {
    $("#keyword").keyup(() => {
        let value = $("#keyword").val();
        let suggestion = $("#suggestion");

        if(value.length < 2) {
            suggestion.empty();
            return false;
        };

        $.ajax({
            url: 'server.php',
            type: 'Post',
            data: JSON.stringify({keyword: value}),
            dataType: 'json',
            contentType: "application/json",
            success: function(data) {
                suggestion.empty();
                if(data.length) {
                    for(i of data) {
                        suggestion.append(`<li class="list-group-item">${i.country}</li>`);
                    }
                }
            },
            error: function(error) {
              console.error('Error:', error);
            }
          });
    })
});

