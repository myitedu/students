<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Move the element</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</head>
<body>

<div class="container">
    <h3>Move whatever you want</h3>
    <hr>
    <img id="whatever" src="https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/2017-07/whatever_dismissive.jpg?itok=teSm7DcY" alt="whatever">
    <hr>


            <button class="btn btn-danger">Top</button>
            <button class="btn btn-info">Left</button>

           <button class="btn btn-danger">Bottom</button>
            <button class="btn btn-info">Right</button>

    </table>

</div>

<style>
    td:first-child{
        text-align: right;
    }
    td:last-child{
        text-align: left
    }
    .table{
        width: 40%;
    }
    .container{
        text-align: center;
    }
    #whatever{
        position: relative;
    }
</style>

<script>
    $(function () {

        let left_pos = 0, top_pos = 0;
        $("button").click(function () {
           let mybutton = $(this).text();
           setWhateverPostion(mybutton);
           if (mybutton=='Top' || mybutton=='Bottom'){
               moveWhateverElement("Top");
           }
            if (mybutton=='Left' || mybutton=='Right'){
                moveWhateverElement("Left");
            }
        });
        function setWhateverPostion(mybutton){
            if (mybutton=='Top'){
                top_pos-=100;
            }else if (mybutton == 'Bottom'){
                top_pos+=100;
            }else if (mybutton == 'Left'){
                left_pos-=100;
            }else if (mybutton == 'Right'){
                left_pos+=100;
            }else{
                alert("This direction is not allowed");
            }
            moveWhateverElement(mybutton);
        }
        function moveWhateverElement(mypos){
            if (mypos=='Top' || mypos=='Bottom'){
                $("#whatever").css("top",top_pos+"px");
            }
            if (mypos=='Left' || mypos=='Right'){
                $("#whatever").css("left",left_pos+"px");
            }
        }

        document.onkeydown = checkKey;
        function checkKey(e) {

            e = e || window.event;

            console.log(e.keyCode);

            if (e.keyCode == 38) {
                // up arrow
                setWhateverPostion("Top");
            }
            else if (e.keyCode == 40) {
                // down arrow
                setWhateverPostion("Bottom");
            }
            else if (e.keyCode == 37) {
                // left arrow
                setWhateverPostion("Left");
            }
            else if (e.keyCode == 39) {
                // right arrow
                setWhateverPostion("Right");
            }

        }



    });
</script>

</body>
</html>
