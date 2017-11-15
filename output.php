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
<div class="flex-wrapper">
    <div class="content">
        <?php
            include_once ("php/connection.php");
            $result = mysqli_query($connection,"SELECT name, email, telephone FROM test_form");
            mysqli_close($connection);

            while ($data = mysqli_fetch_assoc($result)){
        ?>

        <div class="output-box">
            <div class="output-box__name">
                <?php echo 'name: ', $data ['name']; ?>
            </div>
            <div class="output-box__email">
                <?php echo 'email: ',$data ['email']; ?>
            </div>
            <div class="output-box__telephone">
                <?php echo 'phone: ', $data ['telephone']; ?>
            </div>
        </div>

        <?php }?>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>