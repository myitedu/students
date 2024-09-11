<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/august25.css">
</head>
<body>
    <?php 
    ini_set("display_errors", 1);
        $string = "Exemplary strings";
        $email = "email@email.com";
        $eamil2 = "email2@email.com";
    ?>

    <h1 class="title m-5 text-center">August 25 Practice Page</h1>
    <table class="table border">
        <tr>
            <th class="table-item">1</th>
            <th class="table-item">2</th>
            <th class="table-item">3</th>
            <th class="table-item">4</th>
        </tr>
        <tr>
            <td>
                <?php echo strlen($string); ?>
            </td>
            <td>
                <?php echo str_repeat($string, 1); ?>
            </td>
            <td>
                <?php echo str_replace("s", "R", $string); ?>
            </td>
            <td>
                <?php echo addslashes($string); ?> 
            </td>
        </tr>
        <tr>
            <td>
                <?php echo bin2hex($string); ?>
            </td>
            <td>
                <?php echo chop($string); ?>
            </td>
            <td>
                <?php echo chunk_split($string, 4, "J"); ?>
            </td>
            <td>
                <?php echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`"); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo convert_uuencode($string); ?>
            </td>
            <td>
                <?php  echo (str_contains($string, "Ex")); ?>
            </td>
            <td>
                <?php
                    $str = 'ZA';
                    // var_dump(str_decrement($str));
                ?>
            </td>
            <td>
                <?php  var_dump(str_ends_with($string, "e"));?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                $exStr = "1/ 2 /3 /4/ 5 //8/";
                $exStr = str_getcsv($exStr, "");
                var_dump(gettype($exStr), $exStr, "<mark>question ??</mark>");
                echo ($exStr[0]); ?>
            </td>
            <td>
                <?php var_dump(
                    str_pad($string,  20, "_", STR_PAD_BOTH), 
                    strlen($string), "<mark>Question ?? </mark>");
                ?>
            </td>
            <td>
                <?php 
                    var_dump(str_rot13($string));
                ?>
            </td>
            <td>
                <?php 
                    var_dump(str_shuffle($string));
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php 
                    var_dump(str_starts_with($string, "E"), '/', 'str_starts_with');
                ?>
            </td>
            <td>
                <?php 
                    var_dump(str_word_count($string, 0));
                ?>
            </td>
            <td>
                <?php
                    var_dump(strcmp($string, $str), "strcmp - comparison");
                ?>
            </td>
            <td>
                <?php
                    var_dump(strcoll($string, $str), $str, "<mark>difference btw strcmp & strcoll </mark>");
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    var_dump(strcspn($string, "Exe"), "<mark>didn't understnd strcspn</mark>");
                ?>
            </td>
            <td>
                <?php 
                    var_dump(strip_tags("<p>Lorem ipsume</p>"));
                ?>
            </td>
            <td>
                <?php 
                    var_dump(stripos($string, "s"));
                ?>
            </td>
            <td>
                <?php 
                    var_dump("<mark>Question: what is C style string</mark>");
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    var_dump(strstr($email, "@", str_contains($string, "t")));
                ?>
            </td>
            <td>
                <?php
                    $tok = explode("/", "st/ri/n/g");
                    var_dump($tok);
                ?>
            </td>
            <td>
                <?php
                    $title = "Champion";
                    var_dump(substr($title, -4, -2), "<u>offset & length can be negative</u>");
                ?>
            </td>
            <td>
                <?php
                    var_dump(substr_compare($email, $eamil2, strpos($email, "@"), false));
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    var_dump(substr_count($eamil2, "email"));
                ?>
            </td>
            <td>
                <?php
                    var_dump(substr_replace($email, "@gmail.com", strpos($email, "@")));
                    var_dump(substr_replace(array("name1", "name2"), array("Alex", "Abigel"), 0));
                ?>
            </td>
            <td>
                <?php
                    var_dump(trim("   Example String  "));
                ?>
            </td>
            <td>
                <?php
                    var_dump(ucfirst($email), ucwords($string));
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php 
                    var_dump(wordwrap("Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, corporis.", 20, "<br/>", true));   
                ?>
            </td>
            <td>
                <?php 
                    var_dump(count_chars($string, 1), "<mark>Need explanation about count_chars mode</mark>");
                ?>
            </td>
            <td>
                <?php 
                    $checksum = crc32("The quick brown fox jumped over the lazy dog.");
                    printf($checksum);
                ?>
            </td>
            <td>
                <?php 
                    $newArray = explode(" ", " pice1 pice2 pice3 pice4", 4);
                    echo $newArray[1], "<mark>Does echo & print converts values to string when outputing?</mark>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo ucwords("<mark> need explanation regrading to fprintf</mark>");
                ?>
            </td>
            <td>
                <?php
                    echo implode(" ", ["apple ", "avacado", "melon"]), "\n ";
                    print join("-", ["apple ", "avacado", "melon"]);
                ?>
            </td>
            <td>
                <?php
                    echo strpbrk($string, "E");
                ?>
            </td>
            <td>
                <?php
                    echo number_format(1456.75, 2);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>