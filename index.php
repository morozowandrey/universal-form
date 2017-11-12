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

<form id="form">

    <!--&lt;!&ndash; Hidden Required Fields &ndash;&gt;-->
    <!--<input type="hidden" name="project_name" value="Test progect">-->
    <!--<input type="hidden" name="admin_email" value="andrey940@gmail.com">-->
    <!--<input type="hidden" name="form_subject" value="Form Subject">-->
    <!--&lt;!&ndash; END Hidden Required Fields &ndash;&gt;-->

    <input type="text" name="name" placeholder="You name..." required><br>
    <input type="text" name="email" placeholder="You E-mail..." required><br>
    <input type="text" name="phone" placeholder="You phone..."><br>
    <button type="submit">Send</button>
    
    <div class="content"></div>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>