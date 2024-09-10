<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sept 9, 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/september9.css">
</head>
<body>

<div class="container">
    <form action="september9_backend.php" method="post" enctype="multipart/form-data">
        <h4 class="feedbacks_title">Customers Feedback Form</h4>

        <hr>
        <nav style="text-align: center">
            <a href="september9.php">Form</a> |
            <a href="september9_feedbacks.php">Feedbacks</a>
        </nav>
        <hr>

        <table class="table table-borderless">
            <tr>
                <th><label for="first_name">First Name: </label></th>
                <td><input placeholder="Your First Name" required type="text" name="first_name"></td>
            </tr>
            <tr>
                <th><label for="last_name">Last Name: </label></th>
                <td><input placeholder="Your Last Name" required type="text" name="last_name"></td>
            </tr>
            <tr>
                <th><label for="email">Email address: </label></th>
                <td><input placeholder="johndoe@gmail.com" required id="email" type="email" name="email"></td>
            </tr>
            <tr>
                <th><label for="phone">Phone Number: </label></th>
                <td><input placeholder="(347) 576-4951" required id="phone" type="tel" name="phone"></td>
            </tr>
            <tr>
                <th><label for="gender">Your gender </label></th>
                <td>
                    Male: <input value="m" type="radio" name="gender">
                    Female: <input value="f" type="radio" name="gender">
                </td>
            </tr>
            <tr>
                <th><label for="dob">DOB: </label></th>
                <td><input placeholder="01/01/1996" id="dob" type="date" name="dob"></td>
            </tr>

            <tr>
                <th><label for="message">Message: </label></th>
                <td>
                    <textarea name="message" placeholder="Your Message" name="message"></textarea>
                </td>
            </tr>

            <tr>
                <th><label for="photo">Upload Your Photo: </label></th>
                <td>
                    &#9995;
                    <input id="photo" type="file" name="photo"></td>
            </tr>

            <tr>
                <td style="text-align: center" colspan="2">
                    <button type="reset">RESET</button>
                    <button type="submit">SUBMIT</button>
                </td>
            </tr>

        </table>
    </form>
</div>



</body>
</html>
