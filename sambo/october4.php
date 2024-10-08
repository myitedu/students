<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <form method="get">
        <table class="table table-bordered">
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="first_name"></td>
            </tr>

            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="last_name"></td>
            </tr>

            <tr>
                <td>Age: </td>
                <td><input min="18" max="100" type="number" name="age"></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><input  type="email" name="email"></td>
            </tr>

            <tr>
                <td>Gender: </td>
                <td>
                    Male: <input  type="radio" name="gender" value="male"> <br>
                    Female: <input  type="radio" name="gender" value="female">
                </td>
            </tr>

            <tr>
                <td>Select the countries you have traveled to: </td>
                <td>
                    France: <input  type="checkbox" name="country" value="France"> |
                    England: <input  type="checkbox" name="country" value="Emgland"> |
                    Scotland: <input  type="checkbox" name="country" value="Scotland"> |
                    Australia: <input  type="checkbox" name="country" value="Australia"> |
                </td>
            </tr>

            <tr>
                <td>Color: </td>
                <td><input  type="color" name="color"></td>
            </tr>

            <tr>
                <td>Select the rating of your English: </td>
                <td><input min="0" max="10"  type="range" name="english_level"></td>
            </tr>

            <tr>
                <td>Upload: </td>
                <td><input  type="file" name="image"></td>
            </tr>

        </table>
    </form>


    <input type="button">
    <input type="checkbox">
    <input type="color">
    <input type="date">
    <input type="datetime-local">
    <input type="email">
    <input type="file">
    <input type="hidden">
    <input type="image">
    <input type="month">
    <input type="number">
    <input type="password">
    <input type="radio">
    <input type="range">
    <input type="reset">
    <input type="search">
    <input type="submit">
    <input type="tel">
    <input type="text">
    <input type="time">
    <input type="url">
    <input type="week">


</div>

<style>
    td:first-child{
        text-align: right;
        padding-right: 5px;
    }
</style>

</body>
</html>