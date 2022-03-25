<?php

session_start();

$access_token = $_SESSION['accessToken'];

$total = $_POST['total'];

echo $total;

header('Location: https://www.commentcamarche.net/faq/878-redirection-php-redirect-header');



function abc($name)
{
    echo $name;
}
