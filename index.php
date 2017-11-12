<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax load test</title>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<form class="form" id="form">

    <input type="text" name="name" id="input-name" placeholder="You name..." required><br>
    <input type="text" name="email" id="input-email" placeholder="You E-mail..." required><br>
    <input type="text" name="phone" id="input-phone" placeholder="You phone..."><br>
    <button type="submit">Send</button>

    <div class="validation-massage"></div>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>