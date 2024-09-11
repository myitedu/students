<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/august22.css">
</head>
<body>
    <?php
    ini_set("display_errors", 1);
        $file = file_get_contents("file/lorem.txt");
        $keyword = $_GET["keyword"]??null;
        if(!empty($keyword)) {
            $file = str_replace($keyword, "<mark>$keyword</mark>", $file);
        };
    ?>
    <div class="container">
        <h1>Wellcome to Lorem Ipsume</h1>

        <form>
            <label for="keyword">Enter: </label>
            <input type="text" placeholder="Keyword" name="keyword">
            <button type="submit">Go</button>
        </form>

        <p> <?php echo $file;?> </p>
    </div>
</body>
</html>