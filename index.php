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

<div class="form-page flex-wrapper flex-wrapper_form-page">
    <form class="form" id="form" action="php/form.php" novalidate>
        <div class="form-field">
            <label for="input-name" class="form-field__label">Your name</label>
            <input type="text" name="name" class="form-field__input" id="input-name" required="true" placeholder="Enter name">
        </div>
        <div class="form-field">
            <label for="input-email" class="form-field__label">Email</label>
            <input type="email" name="email" class="form-field__input" id="input-email" placeholder="Enter email" required="true">
        </div>
        <div class="form-field">
            <label for="input-phone" class="form-field__label">Phone</label>
            <input type="tel" name="phone" class="form-field__input" id="input-phone" placeholder="Phone" required="true">
        </div>
        <button type="submit" class="form-button">Submit</button>
    </form>
    <div class="validation-massage">Пожалуйста заполните форму...</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>