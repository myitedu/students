<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>

    let browser = navigator.userAgent;

    if(browser.search("Chrome") >=0){
        document.write("This is Chrome");
    }else  if(browser.search("Safari") >=0){
        document.write("This is Safari");
    }else if(browser.search("Firefox") >=0){
        document.write("This is Firefox");
    }else{
        document.write("Other browsers");
    }



</script>
</body>
</html>