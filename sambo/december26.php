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
<?php
$file = file_get_contents("files/jon.txt");
//echo "The total number of characters: ".strlen($file);
//echo "<hr>";
//echo "The total number of words: ".str_word_count($file);
/*if (strlen($file)>40){
    echo "This file has too many characters";
}else{
    echo $file;
}*/
//$result = str_replace("Brooklyn","Manhattan",$file);
//$result = str_repeat("<div class=\"jon\">Jon</div>",1000);
//$result = strip_tags("<div class=\"jon\">Jon</div>");
$keyword = $_GET['keyword']??null;
$keyword = strip_tags($keyword);
echo $keyword;
?>

<div>
    <form>
        <p>
            <textarea name="keyword"></textarea>
            <br>
            <button>GO</button>
        </p>
    </form>
</div>

<style>
    textarea{
        width: 400px;
        height: 300px;
    }
    .jon{
        width: 50px;
        height: 50px;
        text-align: center;
        border: 1px solid black;
        line-height: 50px;
        border-radius: 50%;
        background-color: #b5e081;
        display: inline-block;
        margin: 5px;
    }
</style>
</body>
</html>