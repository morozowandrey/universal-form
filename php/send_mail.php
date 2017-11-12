<?php

$method = $_SERVER['REQUEST_METHOD'];

if ( $method === 'POST' ) {

    $project_name = trim($_POST["project_name"]);
    $admin_email  = trim($_POST["admin_email"]);
    $form_subject = trim($_POST["form_subject"]);

    $name = trim($_POST["name"]);
    $email  = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    $message = "Project: $project_name \nE-mail: $admin_email \nForm subject: $form_subject \nName: $name \nEmail: $email  \nPhone: $phone";

    $pagetitle = "Новая заявка с сайта \"$project_name\"";

} else if ( $method === 'GET' ) {

    $project_name = trim($_GET["project_name"]);
    $admin_email  = trim($_GET["admin_email"]);
    $form_subject = trim($_GET["form_subject"]);

    $name = trim($_POST["name"]);
    $email  = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    $message = "Project: $project_name \nE-mail: $admin_email \nForm subject: $form_subject \nName: $name \nEmail: $email  \nPhone: $phone";

    $pagetitle = "Новая заявка с сайта \"$project_name\"";
}
$pagetitle = "Новая заявка с сайта \"$project_name\"";
$message = "<table style='width: 100%;'>$message</table>";

function adapt($text) {
    return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: '.adapt($project_name).' <'.$admin_email.'>' . PHP_EOL .
    'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, adapt($form_subject), $message,  $headers );

echo "ebanis";

?>