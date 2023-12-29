<?php

$link = mysqli_connect("127.0.0.1", "root", "");

if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
mysqli_close($link);

?>