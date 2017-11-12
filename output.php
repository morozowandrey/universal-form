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

<form>

    <?php
        include_once ("php/connection.php");

        $result = mysqli_query($connection,"SELECT name, email, telephone FROM test_form WHERE id = '6' ");
        mysqli_close($connection);

        $data = mysqli_fetch_assoc($result);
    ?>
    
    <div class="content">
        <div class="name">
            <?php echo $data ['name']; ?>
        </div>
        <div class="email">
            <?php echo $data ['email']; ?>
        </div>
        <div class="telephone">
            <?php echo $data ['telephone']; ?>
        </div>
    </div>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>